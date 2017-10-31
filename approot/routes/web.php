<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// local only for testing or view
if (env("APP_ENV")=="local") {
	Route::get('/list', function () { return view('mock/list'); });
	Route::get('/mock', function () { return view('mock/index'); });
	Route::get('/mock/blog_archives', function () { return view('mock/blog_archives'); });
	Route::get('/mock/mixed_blood', function () { return view('mock/mixed_blood'); });
	Route::get('/mock/blog_top', function () { return view('mock/blog_top'); });
	Route::get('/mock/blog_single', function () { return view('mock/blog_single'); });
	

}