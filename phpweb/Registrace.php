<?php
Session_start();

// if user is already logged in, forward to /Lorem
if (($_SESSION['loggedIn'] ?? null) === true) {
    header("location:/Lorem");
    exit();
}

// if user has entered username/password save it, else make it null
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

// if the password, username or both have not been entered
if (!is_string($username) || !is_string($password)) {
    echo "Missing login credentials!";
}

// if user has entered username and password, save post to json file
if (($username !== null) && ($password !== null)) {
    (new UserRepository())->saveUser($username, $password);

    // successfully registered, forwards to /Login
    header("location:/Login");
    exit();
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
