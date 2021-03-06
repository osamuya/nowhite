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

    public static function globalMenu()
    {

        return array(
            "appTitle" => "nowhote",
            "logo" => "/assets/img/nowhite_150.png",
            "menu" => array(
                0 => array(
                    "text"=>"Home",
                    "path"=>"#",
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
                    "path"=>"#",
                    "icon" => "/assets/img/ug-login.png",
                    "target" => "_self",
                    "childMenu" => array(
                        0 => array(
                            "text" => "Sign up",
                            "path" => "/register",
                            "target" => "_self",
                        ),
                        1 => array(
                            "text" => "Login",
                            "path" => "/login",
                            "target" => "_self",
                        ),
                    ),
                ),
            ),//menu
        );
    }

    public static function userStatus()
    {
        /*

        退会(withdrawal)
            'role' => 1
            'status' => 4
            'delflag' => 1
            'email' => 'withdrawal::sample@example.com'

        メンバー(login)
            'status' => 2
            'delflag' => 0
            'role' => 1
            'email' => 'sample@example.com'
        */

        return $datauserStatus = array(
            'role' => array(
                0 => 'noSelect',
                1 => 'member',
                2 => 'admin',
                99 => 'root',
            ),
            'status' => array(
                0 => 'nothing',
                1 => 'temporaryReception',
                2 => 'active',
                3 => 'temporaryStop',
                4 => 'withdrawal',
            ),
        );
    }
}
