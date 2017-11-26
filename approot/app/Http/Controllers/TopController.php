<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/* App parameter */
use App\Library\ContentsParameter;
use App\Library\BaseClass;

class TopController extends Controller
{
    public function index() {

        /* ログインユーザーの情報を取得する
         *
         */
        $user = auth()->user();
        if (!empty($user)) {
//        var_dump($user->name);
//        var_dump($user->password);
//        var_dump($user->email);
//        var_dump($user->uniqeid);
//        var_dump($user->uniqehash);
//        var_dump($user->remember_token);
//        var_dump($user->description);
//        var_dump($user->role);
//        var_dump($user->status);
//        var_dump($user->delflag);
//        var_dump($user->created_at);
//        var_dump($user->updated_at);
        }
        return view("index");
    }
}
