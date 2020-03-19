<?php
Session_start();

if ($_SESSION['loggedIn'] ?? null === true) {
    header("location:/Lorem.php");
    exit();
}

if ($_SESSION['username'] ?? null !== null && $_SESSION['password'] ?? null !== null) {
    header("location:/Login.php");
    exit();
}

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if (is_string($username) && is_string($password)) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:/Login.php");
    exit();
}
?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
