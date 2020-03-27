<?php
Session_start();

// if user is already logged in, forward to /Lorem
if ($_SESSION['loggedIn'] ?? null === true) {
    header("location:/Lorem");
    exit();
}

/*$json = file_get_contents('RegisteredUsers.json');
foreach ($json->);*/

// if username and password already exist in session, forward to /Login
if ($_SESSION['username'] ?? null !== null && $_SESSION['password'] ?? null !== null) {
    header("location:/Login");
    exit();
}

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

// save post to json file
$json = file_get_contents('RegisteredUsers.json');
$data = json_decode($json);
$data[] = $_POST;
file_put_contents('RegisteredUsers.json', json_encode($data));

// successfully registered, forwards to /Login
if (is_string($username) && is_string($password)) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("location:/Login");
    exit();
}
?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
