<?php

require_once('../config/config.php');

session_start();

$session_name = session_name();
$_SESSION = array();

if (isset($_COOKIE[$session_name]) === TRUE) {
    setcookie($session_name, '', time() - 3600);
}

session_destroy();

header('Location: '.SITE_URL.'auth/login.php');