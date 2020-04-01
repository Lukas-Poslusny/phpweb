<?php
Session_start();

// if user is already logged in, forward to /Lorem
if (($_SESSION['loggedIn'] ?? null) === true) {
    /*header("location:/Lorem");
    exit();*/
    var_dump($_SESSION);
}

// save username & password locally
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;


if ($username !== null && $password !== null) {
    $json = file_get_contents('RegisteredUsers.json');
    $data = json_decode($json);

    foreach ($data as $user) {

        if (($user->username === $username) && ($user->password === $password)) {
            $_SESSION['username'] = $username;
            $_SESSION['loggedIn'] = true;
            header("location:/Lorem");
            exit();
        }
        // havent found users username and password
    }
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
