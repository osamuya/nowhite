<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
