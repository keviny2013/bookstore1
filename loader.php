<?php
define("_PATH", str_replace("loader.php", "", __FILE__));

function default_autoload($class) {
    if (file_exists(_PATH . 'lib/' . $class . '.class.php')) {
        @include_once(_PATH . 'lib/' . $class . '.class.php');
    } else {
        @include_once(_PATH . 'lib/' . $class . '.php');
    }
}
spl_autoload_register('default_autoload');
/*function __autoload($class_name) {
    if (file_exists(_PATH . 'lib/' . $class . '.class.php')) {
        @include_once(_PATH . 'lib/' . $class . '.class.php');
    } else {
        @include_once(_PATH . 'lib/' . $class . '.php');
    }
}*/
include "lib/utils.php"; # includes general function

_getInstance(_e($_REQUEST['q'],''));

$instance = _cg("instance");

$host = $_SERVER['HTTP_HOST'];

$http_protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on" ? "https://" : "http://";
//$http_protocol = isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == "https" ? "https://" : "http://";

define('_U', $http_protocol . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));

define('_UPlain', "http://" . $host . substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/') + 1));
define("_MEDIA_URL", _U . "instance/{$instance}/media/");
define("_DOCS_UPLOAD_URL", _PATH . "instance/{$instance}/uploads/");
define("_MEDIA_UPLOAD_URL", _PATH . "instance/{$instance}/media/");

if(_isLocalMachine()){
    define('_U_ADMIN', $http_protocol . $host . "/kevin/kevin-chatgpt-book-summary/");    
}else{
    define('_U_ADMIN', $http_protocol . $host . "/");
}
define('_U_SUBUSER', _U . "subuser/");
define('_U_EMAIL_VALIDATOR', _U . "emailvalidator/");

error_reporting(E_ALL);
$db = Db::__d();
include _PATH . "instance/{$instance}/config.inc.php";
$url = _cg("url"); // set from _getInstance function
define('_URL', $url);

$pageSpecificCSS = array();
$pageSpecificJS = array();
$modulePage = $url . ".php";

if($instance == "admin"){
    $modulePage = $url . ".php";
}


@include _PATH . "instance/{$instance}/controller/{$url}.inc.php";
$_templete = isset($_templete) ? $_templete : 'index.tpl.php';
@include _PATH . "instance/{$instance}/tpl/{$_templete}";
$actual_link = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
/*if(!isset($_SESSION['tenant']) && $actual_link != _U."?logout=1"){
    _R(_U.'?logout=1');
    exit;   
}*/
?>