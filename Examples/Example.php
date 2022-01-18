<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

use ApiGratis\ApiBrasil;

class Example
{

    static function start()
    {
        return ApiBrasil::WhatsAppService("start", [
            "server_host" => "https://whatsapp2.contrateumdev.com.br", //required
            "method" => "POST", //optional
            "apitoken" => "YOUR_API_TOKEN", //required
            "session" => "YOUR_SESSION_NAME", //required
            "sessionkey" => "YOUR_SESSION_KEY", //required
            "wh_status" => "", //optional
            "wh_message" => "", //optional
            "wh_connect" => "", //optional
            "wh_qrcode" => "", //optional
        ]);
    }
    
}

$example = Example::start();
var_dump($example);