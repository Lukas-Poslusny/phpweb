<?php

session_start();

if ($_POST['username'] ?? null || $_POST['password'] ?? null) {
    echo "Hi, ($username)";
}
else {
    header('location: login.php');
    exit();
}

?>