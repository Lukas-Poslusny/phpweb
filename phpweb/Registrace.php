<form>
    <label>Name: <input type="text" name="username"></label>
    <label>Age: <input type="password" name="password"></label>
</form>

<?php

session_start();

if ($_POST['username'] ?? null || $_POST['password'] ?? null) {
    header('location: lorem.php');
    exit();
}

$username = $_SESSION['username_registered'];
$password = $_SESSION['password_registered'];

?>