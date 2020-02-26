<form>
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <input type="submit" value="click" (click)="submit(username, password)">submit</input>
</form>

<p>Already registered?</p>
<a href = /Login.php>Sign in</a>

<?php
Session_start();

function submit($username, $password) {
    $_SESSION["name"] = $_POST["name"]; 
    $_SESSION["pass"] = $_POST["pass"];

    if ($_POST['username'] ?? null || $_POST['password'] ?? null) {
        header('location: /lorem.php');
        exit();
    }
}