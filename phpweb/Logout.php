<?php

session_start();

if ($_POST["loggedIn"] === false) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}
else {
    header('location: /Login.php');
    exit();
}