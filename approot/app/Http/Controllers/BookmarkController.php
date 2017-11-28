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

class BookmarkController extends Controller
{

    public function __construct()
    {

        $this->custom_log = new Logger('REGIST');
        $this->custom_log->pushHandler(new StreamHandler(env("LOGIN_LOG"), Logger::INFO));

    }

    public function index(Request $request)
    {
        return view("bookmark.index");
    }
}
