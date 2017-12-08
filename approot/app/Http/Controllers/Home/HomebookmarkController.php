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

// model
use App\NwUserBookmark;

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
    public function confirm(Request $request)
    {
//        var_dump($request->input('siteName'));
//        var_dump($request->input('url'));
//        var_dump($request->input('description'));
//        var_dump($request->input('rss'));

        $this->validate($request, [
            'siteName' => 'required',
            'url' => 'required|max:1000|regex:/https?:\/\/[a-zA-Z0-9-_.~\/?:&=%+#]+/',
            'description' => 'required|min:10|max:200',
            'rss' => 'max:1000|regex:/https?:\/\/[a-zA-Z0-9-_.~\/?:&=%+#]+/',
        ]);

        /* Original Validation */


        return view('home.bookmark_confirm')->with([
            "siteName" => $request->input('siteName'),
            "url" => $request->input('url'),
            "description" => $request->input('description'),
            "rss" => $request->input('rss'),
        ]);
    }

    public function store(Request $request)
    {
        var_dump($request->input('siteName'));
        var_dump($request->input('url'));
        var_dump($request->input('description'));
        var_dump($request->input('rss'));

        $this->validate($request, [
            'siteName' => 'required',
            'url' => 'required|max:1000|regex:/https?:\/\/[a-zA-Z0-9-_.~\/?:&=%+#]+/',
            'description' => 'required|min:10|max:200',
            'rss' => 'max:1000|regex:/https?:\/\/[a-zA-Z0-9-_.~\/?:&=%+#]+/',
        ]);

        /* Original Validation */

        $nw_user_bookmarks = new NwUserBookmark();
                $user = \Auth::user();
            var_dump($user->id);

        // insert
        $nw_user_bookmarks->bmUsersId       = $user->id;
        $nw_user_bookmarks->bmImage         = "";
        $nw_user_bookmarks->bmImageThubnail = "";
        $nw_user_bookmarks->bmTitle         = $request->input('siteName');
        $nw_user_bookmarks->bmMeta          = "";
        $nw_user_bookmarks->bmLink          = $request->input('url');
        $nw_user_bookmarks->bmRss           = $request->input('rss');
        $nw_user_bookmarks->bmDescription   = $request->input('description');
        $nw_user_bookmarks->bmCount         = 1;
        $nw_user_bookmarks->bmRelations     = "";
        $nw_user_bookmarks->bmRecommend     = "";
        $nw_user_bookmarks->bmRemark        = "";
        $nw_user_bookmarks->bmStatus        = 1;
        $nw_user_bookmarks->bmDelflag       = 0;
//        $nw_user_bookmarks->created_at = "";
//        $nw_user_bookmarks->updated_at = "";

        // store
        $re = $nw_user_bookmarks->save();



        return view("home.bookmark_store");

//        return view('home.bookmark_confirm')->with([
//            "siteName" => $request->input('siteName'),
//            "url" => $request->input('url'),
//            "description" => $request->input('description'),
//            "rss" => $request->input('rss'),
//        ]);
    }

}
