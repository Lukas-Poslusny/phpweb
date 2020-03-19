<?php
Session_start();


if ($_SESSION['loggedIn'] ?? null === true) {
    header("location:/Lorem");
    exit();
}


$username = $_SESSION['username'] ?? null;
$password = $_SESSION['password'] ?? null;
$username_login = $_POST['username'] ?? null;
$password_login = $_POST['password'] ?? null;

if ($username === null && $password === null) {
    header("location:/Registrace");
    exit();
}

if (($username === $username_login && $username !== null) && ($password === $password_login && $password !== null)) {
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
