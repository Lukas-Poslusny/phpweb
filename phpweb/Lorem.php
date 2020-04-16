<?php
session_start();

$username = $_SESSION['username'];
include 'Lorem.phtml';


// if user isn't logged in, forward to /Login (which forwards to register if user isn't registered yet)
if (($_SESSION['loggedIn'] ?? null ) !== true) {
    header("location:/Login");
    exit();
}
