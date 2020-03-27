<?php
Session_start();

// if user is already logged in, forward to /Lorem
if ($_SESSION['loggedIn'] ?? null === true) {
    header("location:/Lorem");
    exit();
}

// save username & password locally
$username = $_SESSION['username'] ?? null;
$password = $_SESSION['password'] ?? null;
$username_login = $_POST['username'] ?? null;
$password_login = $_POST['password'] ?? null;

// if username or password doesnt exist in session, forward to /Registrace
if ($username === null || $password === null) {
    header("location:/Registrace");
    exit();
}

// if value of username & password = registered username & password, forward to /Lorem
if (($username === $username_login) && ($password === $password_login)) {
    $_SESSION['loggedIn'] = true;
    header("location:/Lorem");
    exit();
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
