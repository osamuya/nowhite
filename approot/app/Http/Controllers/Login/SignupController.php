<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* App parameter */
use App\Library\ContentsParameter;
use App\Library\BaseClass;

/* For regist */
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

// Monolog
use Illuminate\Support\Facades\Log;

/* For custom monolog to the app */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// Mail
use Mail;
use App\Mail\BaseMail;

// Datetime package "Carbon" for laravel
use Carbon\Carbon;

class SignupController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');

        $this->custom_log = new Logger('REGIST');
        $this->custom_log->pushHandler(new StreamHandler(env("LOGIN_LOG"), Logger::INFO));

    }

    public function registConfirm(Request $request)
    {
        /* Request check */
        if (
            $request->has('name') &&
            $request->has('email') &&
            $request->has('password')
        ) {
            // do nothing
        }
        else {
            // redirect to path of "/register"
            redirect()->route('register');
        }
        /* Validation */
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:nw_users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        /* Request data */
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        );

        /* Reload prevention request and session */
        $request->session()->flash('newRegistStoreFlag',true);

        return view("auth.register_confirm")->with($data);
    }

    public function store(Request $request)
    {
        /* Data that can be sent is only once */
        if ($request->session()->get('newRegistStoreFlag') != true)
        { return redirect("/"); }

        /* Preparation of transmission data
         *
         * name @request
         * email @request
         * password @request by bcrypt
         *
         * datetime @date()
         * accessURL @makeAccessURL()
         *
         */

        /* Create a password of a bullet on a bullet */
        $boundLetteredPassword = BaseClass::boundLettered("8ta8taDance",1);

        /* Hash create for mail authentication */
        $uniqeid = strtoupper(uniqid("NWID_"));
        $uniqehash = substr(hash('sha512',$request->input('password').env("HASH_SALT").date("Ymdist")),0,60);

        /* Password hash */
        $passwordHash = bcrypt($request->input('password'));

        /* Date time */
        $dt = Carbon::now();
        $registedDate =  $dt->format('Y年m月d日 h:i.s');
        echo date("Y-m-d H-i-s");
        var_dump($registedDate);
        exit;

        /* Make access URL */
        $makeURL = env("APP_URL")."mail_authenticate_user/".$uniqehash;


        /* Regist data
         *
         *
         *
         *
         *
         */
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $passwordHash,
            'uniqeid' => $uniqeid,
            'uniqehash' => $uniqehash,
            'role' => 1,
            'status' => 1,
            'delflag' => 0,
        );

        /* save data */
        $this->create($data);
        $logLine = "[New user registed] ".$request->input('name')." ".$request->input('email');
        $this->custom_log->addInfo($logLine);

        /* send mail */
        $mailTo = $data['email'];
        $options = [
            'from' => 'from@example.com',
            'from_jp' => '仮登録完了のお知らせです',        //mailの内部のタイトル
            'to' => $mailTo,
            'subject' => '仮登録完了のお知らせ',    //mailの外側のタイトル
            'template' => 'mails.tmpregist',
            "bcc" => "oosamuuy@gmail.com",
        ];

        // mail template value
        $sndData = [
            "name" => $data['name'],
            "email" => $data['email'],
            "password" => $boundLetteredPassword,
            "datetime" => $registedDate,
            "accessURL" => $makeURL,
        ];
        Mail::to($mailTo)->send(new BaseMail($options, $sndData));
        $logLine = "[Send to mail new registed user] ".$request->input('name')." ".$request->input('email');
        $this->custom_log->addInfo($logLine);

        /* save log */
        $logLine = "[Complete new regist work flows] ".$request->input('name')." ".$request->input('email')." ".$registedDate;
        $this->custom_log->addInfo($logLine);

        /* session reset */
        $request->session()->flush('newRegistStoreFlag');

        /* end display */
        return view("auth.register_stored");



    }

    protected function create(array $data)
    {
        /*入力データを返す*/
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'uniqeid' => $data['uniqeid'],
            'uniqehash' => $data['uniqehash'],
//            'remember_token' => "",
//            'description' => $data['description'],
            'role' => $data['role'],
            'status' => $data['status'],
            'delflag' => $data['delflag'],
        ]);
    }

    public function mailAuthenticate($accesshash) {





        return "mailAuthenticate";
    }

}
