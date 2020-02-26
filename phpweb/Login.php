<form>
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit" value="click" (click)="submit(username, password)">submit</input>
</form>

<p>Not yet an user?</p>
<a href = /Registrace.php>Sign up</a>

<?php

session_start();

if ($_POST['username'] === null || $_POST['password'] === null) {
    $_SESSION["loggedIn"] = false;
}

else if ($_POST['username'] === 'username_registered' && $_POST['password'] === 'password_registered') {
    $_SESSION["loggedIn"] = true;
    header('location: /Lorem.php');
    exit();
}