<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\ContentsParameter;

class TopController extends Controller
{
    public function index() {

//        echo ContentsParameter::hello();
//        exit;

        return view("index");
    }
}
