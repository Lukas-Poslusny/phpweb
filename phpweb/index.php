<?php

$url =  $_SERVER['REQUEST_URI'];


switch ($url){
    case '/Login': $filename = 'Login.php';
    break;

    case '/Registrace': $filename = 'Registrace.php';
    break;

    case '/Logout' : $filename = 'Logout.php';
    break;

    case '/Lorem' : $filename = 'Lorem.php';
    break;

    default : $filename = 'index.php';
    break;
}

require $filename;

header("location:/$filename");
exit();
