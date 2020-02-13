<?php

session_start();

if ($_POST['username'] ?? null || $_POST['password'] ?? null) {
    $loggedIn = false;
}
else if ($_POST['username'] = username_registered || $_POST['password'] = password_registered) {
    $loggednIn = true;
    header('location: lorem.php');
    exit();
}

?>