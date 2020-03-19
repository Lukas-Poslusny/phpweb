<?php

session_start();

if ($_SESSION['loggedIn'] !== true) {
    header("location:/Login");
    exit();
}


echo "Hi, ".($_SESSION['username']);

?>
<br>
<a href="/Logout">Log out</a>
