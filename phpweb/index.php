<?php

$url =  $_SERVER['REQUEST_URI'];


switch ($url){
    case '/Login': $filename = 'Login.php';
    break;

    case '/Register': $filename = 'Register.php';
    break;

    case '/Logout' : $filename = 'Logout.php';
    break;

    case '/Lorem' : $filename = 'Lorem.php';
    break;

    default : $filename = '404.php';
    break;
}

require $filename;
