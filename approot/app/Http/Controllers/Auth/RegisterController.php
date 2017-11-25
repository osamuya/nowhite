<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:nw_users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
//        /**
//         * 入力データの準備
//         *
//         *
//         */
//        $data['uniqeid'] = "1";
//        $data['count'] = 1;
//        $data['active'] = 1;
//        $data['role'] = 1;
//        $data['delflag'] = 0;
//        $data['uniqehash'] = "1";
//        /**
//         * フィールドの追加は、このreturnの部分とmodelにカラム追加します。
//         *
//         *
//         *
//        */
//        return User::create([
//            'name' => $data['name'],
//            'password' => bcrypt($data['password']),
//            'email' => $data['email'],
//            'uniqeid' => $data['uniqeid'],
//            'uniqehash' => $data['uniqehash'],
////            'remember_token' => "",
//            'description' => "",
//            'status' => $data['count'],
//            'active' => $data['active'],
//            'role' => $data['role'],
//            'delflag' => $data['delflag'],
//        ]);
    }
}
