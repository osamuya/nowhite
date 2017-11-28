<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

/* App parameter */
use App\Library\ContentsParameter;
use App\Library\BaseClass;

/* For custom monolog to the app */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

//    public $custom_log;

//    public function __construct()
//    {
//
//        $this->custom_log = new Logger('Exception');
//        $this->custom_log->pushHandler(new StreamHandler(env("LOGIN_LOG"), Logger::INFO));
//
//    }

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
//        $logLine = "[Error]";
//        $this->custom_log->addInfo($logLine);

        return parent::render($request, $exception);
    }
}
