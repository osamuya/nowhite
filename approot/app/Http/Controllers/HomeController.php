<?php

namespace App\Http\Controllers;

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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->custom_log = new Logger('WITHDRAWWAL');
        $this->custom_log->pushHandler(new StreamHandler(env("LOGIN_LOG"), Logger::INFO));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * 退会手続き
     * Withdrawal form members.
     *
     *
     * @return view()
     */
    public function unsubscribe()
    {



        return view("auth.unsubscribe_on");
    }

    public function unsubscribed(Request $request)
    {

        /*
        nw_users update
        - delflag = 1
        - uodate+prefix:  sample@example.com -> withdrawal::sample@example.com
        */

        /* Validation */
        $this->validate($request, [
            'email' => 'required|string|email|max:255',
        ]);

        /* Start withdrawal process */
        if ($request->has('email')) {
            /* Retrieve login user information */
            $user = \Auth::user();
            $dt = Carbon::now();

            if ($user->email == $request->input('email')) {

                /* Get global IP address */
                $gip = BaseClass::getGlobalip();

                /* Update withdrawal status */
                User::where('id', $user->id)
                    ->update([
                        'email' => "withdrawal::".$user->email,
                        'status' => 4,
                        'delflag' => 1,
                    ]);
                $logLine = "[Withdrawal] ID:".$user->id." ".$dt." ".$gip;
                $this->custom_log->addInfo($logLine);

                /* logout */
                \Auth::logout();

                return view("auth.unsubscribed");

            } else {
                /* If you can not unsubscribe because of email mismatch */
                return view("customerror")->with([
                    "error_message" => "退会手続きが未完了",
                    "error_description" => "退会手続きが完了しませんでした。戻って再手続きを行うか、ダッシュボードに戻ってください。",
                ]);
            }
        }

        return "unsubscribe";
    }
}



















