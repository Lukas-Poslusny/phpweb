<?php

session_start();

if ($_POST['username'] ?? null || $_POST['password'] ?? null) {
    unset($_SESSION['username']);
    unset($_SESSION['password']);
}
else {
    header('location: login.php');
    exit();
}

?>