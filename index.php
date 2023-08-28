<?php
session_start();
error_reporting(0);

switch ($_SERVER['HTTP_HOST']) {
    case "localhost":
        define('DB_HOST', 'localhost');	
        define('DB_PASSWORD', '');
        define('DB_UNAME', 'root');
        define('DB_NAME', 'kevin_chatgpt');
        define('IS_DEV_ENV', TRUE);
        break;
    default:
        define('DB_HOST', 'localhost');
        define('DB_PASSWORD', '3cG92Df6cvRK2Mz7v99wuk');
        define('DB_UNAME', 'root');
        define('DB_NAME', 'kevin_chatgpt');
        define('IS_DEV_ENV', FALSE);
        break;
}


date_default_timezone_set('America/New_York');
include "loader.php";
