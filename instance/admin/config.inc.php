
<?php

$auth_pages = array();

$auth_pages[] = 'dashboard';
$auth_pages[] = 'books';


if (isset($_REQUEST['logout']) && $_REQUEST['logout'] != "") {
    User::killSession();
}

_admin_auth_url($auth_pages, "login");

?>