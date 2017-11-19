<?php
namespace app\Library;

// Datetime package "Carbon" for laravel
use Carbon\Carbon;
// for custom monolog to the app
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class ContentsParameter
{

    public static function hello() {
        return 'ContentsParameter class. hello()!';
    }

    public static function globalMenu() {

        return array(
            "appTitle" => "nowhote",
            "logo" => "/assets/img/nowhite_150.png",
            "menu" => array(
                0 => array(
                    "text"=>"Home",
                    "path"=>"/",
                    "icon" => "/assets/img/ug-home.png",
                    "target" => "_self",
                    "childMenu" => array(
                        0 => array(
                            "text" => "nowhite",
                            "path" => "/",
                            "target" => "_self",
                        ),
                        1 => array(
                            "text" => "nowhite note top",
                            "path" => "/note/",
                            "target" => "_self",
                        ),

                    ),
                ),
                1 => array(
                    "text"=>"Login",
                    "path"=>"/login",
                    "icon" => "/assets/img/ug-login.png",
                    "target" => "_self",
                ),
            ),//menu

        );
    }
}
