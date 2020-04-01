<?php

session_start();

// if user isn't logged in, forward to /Login (which forwards to register if user isn't registered yet)
if (($_SESSION['loggedIn'] ?? null ) !== true) {
    /*header("location:/Login");
    exit();*/
    var_dump($_SESSION);
}

echo "Hi, ".($_SESSION['username']);

?>
<br>
<a href="/Logout">Log out</a>
