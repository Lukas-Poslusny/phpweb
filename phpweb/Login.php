<?php
Session_start();
include 'UserRepository.php';
include 'Login.phtml';

// if user is already logged in, forward to /Lorem
if (($_SESSION['loggedIn'] ?? null) === true) {
    header("location:/Lorem");
    exit();
}

// save username & password locally
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username !== null && $password !== null) {
    if ((new UserRepository())->loginUser($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['loggedIn'] = true;
        header("location:/Lorem");
        exit();
    }
    // TODO returned false
    // haven't found users username and password
}
