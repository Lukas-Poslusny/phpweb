<?php
Session_start();

// if user is already logged in, forward to /Lorem
if ($_SESSION['loggedIn'] ?? null === true) {
    header("location:/Lorem");
    exit();
}

// if username and password already exist in session, forward to /Login
if ($_SESSION['username'] ?? null !== null && $_SESSION['password'] ?? null !== null) {
    header("location:/Login");
    exit();
}

// if user has entered username/password save it, else make it null
$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;


// TODO if (username doesnt exist in json and) the password, username or both have not been entered
if (($username !== null || "") || ($password !== null || "")) {
    echo "Missing login credentials!";
}

// if user has entered username and password, save post to json file
if (($username !== "" || null) && ($password !== "" || null)) {
    $json = file_get_contents('RegisteredUsers.json');
    $data = json_decode($json);
    $data[] = $_POST;

    //TODO tady chci blokovat registraci pokud jmeno už existuje v jsonu.

    /*
    // check if username is already registered
    foreach($json as $user) {
        // if username already exists in json
        if ($user['username'] == $_POST['username']) {
            // if username already exists and password is matching, log user in, forward to /Lorem
            if ($user['password'] == $_POST['password']) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                header("location:/Lorem");
                exit();
            } // if username already exists but password doesn't
            else {
                echo "username already taken.";
            }
        }
    }*/

    //TODO if (username doesnt exist in json and) both username and password have been entered
    if (($username !== null || "") && ($password !== null || "")) {
        file_put_contents('RegisteredUsers.json', json_encode($data));
        // successfully registered, forwards to /Login
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        header("location:/Login");
        exit();
    }
}

?>
<form method="post">
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit">
</form>
