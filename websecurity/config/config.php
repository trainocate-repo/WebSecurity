<?php

define('DSN', 'mysql:dbname=websec;host=localhost;charset=utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', 'websecurity');
define('SITE_URL', 'http://localhost:8080/websecurity/');

error_reporting(E_ALL & ~E_NOTICE);
session_set_cookie_params(1440, '/');