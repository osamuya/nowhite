<?php

namespace App\Http\Controllers\Login;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/* for regist */
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

/* for custom monolog to the app */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// monolog
use Illuminate\Support\Facades\Log;

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
        $request->session()->flash('newRegistStoreFlag',1);

        return view("auth.register_confirm")->with($data);
    }

    public function store(Request $request)
    {

        if ($request->session()->get('newRegistStoreFlag') == 1)
        {

            /* regist data */
            $data = array(
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => bcrypt($request->input('password')),
            );

            $logLine = $request->input('name')." ".$request->input('email');

            /* save data */
            $this->create($data);
            $this->custom_log->addInfo($logLine);
            $request->session()->flush('newRegistStoreFlag');
            return view("auth.register_stored");

        }
        else
        {
            return redirect("/");
        }
    }


    protected function create(array $data)
    {

        /* Hash create for mail authentication */
        $uniqehash = substr(hash('sha512',$data['password'].env("HASH_SALT").date("Ymdist")),0,60);
        $uniqeid = strtoupper(uniqid("UNIQ_"));

        /*入力データを返す*/
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $data['password'],
            'uniqeid' => $uniqeid,
            'uniqehash' => $uniqehash,
//            'remember_token' => "",
//            'description' => $data['description'],
            'role' => 1,
            'status' => 1,
            'delflag' => 0,
        ]);
    }

}
