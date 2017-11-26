<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

// add like a vendor/laravel/framework/src/Illuminate/Foundation/Auth/AuthenticatesUsers.php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /* エラーメッセージ日本語化 */
//    public function sendFailedLoginResponse(Request $request)
//    {
//        throw ValidationException::withMessages([
//            $this->username() => [trans('認証できませんでした。')],
//        ]);
//    }

    /* ログイン条件の変更 */
    public function credentials(Request $request)
    {
        /*
         * 通常のメンバーログインはrole + status + delflag
        */
        $authConditionsOrigin = $request->only($this->username(), 'password');
        $authConditionsCustom = array_merge(
            $authConditionsOrigin,
            ['status'=>'2'],
            ['delflag'=>'0']
        );
        return $authConditionsCustom;
    }
}
