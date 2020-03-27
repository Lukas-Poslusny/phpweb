<?php

session_start();
// delete session
session_destroy();

header("location:/Registrace");
exit();
