<?php 

namespace App\Utilities;

use Illuminate\Support\Facades\Route;
class HelpersFunctions
{


    public static function formatTitle( $title )
    {
        $base = "Laracarte - List of artisans";
        return !empty($title)? $title . " | " . $base : $base;
    }

    public static function active( $route )
    {
        return Route::is($route)? "active" : "";
    }
    
    public static function sendEmail($to, $from_user, $subject = '(No subject)', $message = '')
    {

        $from_user  = "=?UTF-8?B?" . base64_encode($from_user) . "?=";
        $subject    = "=?UTF-8?B?" . base64_encode($subject) . "?=";
        $headers    = 'MIME-Version: 1.0' . "\r\n";
        // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
        $headers   .= 'Content-type: text/html; charset=iso-8859-1';

        return mail($to, $subject, $message, $headers);

    }
}