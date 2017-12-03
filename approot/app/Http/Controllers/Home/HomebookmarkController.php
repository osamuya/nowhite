<?php

namespace App\Http\Controllers\Home;

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

class HomebookmarkController extends Controller
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
    public function create()
    {
        return view('home.bookmark_create');
    }
}
