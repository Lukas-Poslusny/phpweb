<?php

session_start();

// if username or password doesnt exist in session, forward to /Registrace
if ($username === null || $password === null) {
    header("location:/Registrace");
    exit();
}
// if user isn't logged in, forward to /Login (which forwards to register if user isn't registered yet)
else if ($_SESSION['loggedIn'] !== true) {
    header("location:/Login");
    exit();
}

echo "Hi, ".($_SESSION['username']);

?>
<br>
<a href="/Logout">Log out</a>
