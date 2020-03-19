<?php

session_start();

if ($_SESSION['loggedIn'] !== true) {
    header("location:/Login.php");
    exit();
}


echo "Hi, ".($_SESSION['username']);

?>
<br>
<a href="/Logout.php">Log out</a>
