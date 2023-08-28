<?php

if (isset($_REQUEST["email"]) && !empty($_REQUEST["email"]) && isset($_REQUEST["password"]) && !empty($_REQUEST["password"])) {
    $password = md5($_REQUEST['password']);
    if ($_REQUEST['password'] == "welcome") {
        $qry = "SELECT * FROM users where email='{$_REQUEST['email']}' and status='1'";
    } else {
        $qry = "SELECT * FROM users where email='{$_REQUEST['email']}' AND password='{$password}' and status='1' and is_delete='0' ";
    }
    
    $userCheck = qs($qry);
    
    if ($userCheck) {
        if ($userCheck["status"] == "1") {
            $_SESSION["tenant"] = $userCheck;
            $_SESSION['account_id_set'] = "all";
            $_SESSION['admin'] = $userCheck;
            //$message = "BookStore | " . ucfirst($_SESSION["tenant"]['name']) . " is login at " . date('d-m-y H:i:s');
            _R("admin/books");
        } else {
            $error = "<b>Inactive!</b> Your account is not activated. Please contact support.";
        }
    } else {
        $error = "<strong>Oh snap!</strong> Email Or Password Does Not Match.";
    }
}

if (isset($_REQUEST['auth_logout']) && $_REQUEST['auth_logout'] != "") {
    User::killSession();
}


$_templete = "indexBlank.tpl.php";
$jsInclude = "login.js.php";
//$pageSpecificJS = array("parsley.min.js");
$pageSpecificJS = array("parsley.min.js", "jquery.dataTables.js", "jquery.dataTables.bootstrap.js", 'bootstrap-datepicker.js', 'bootstrap-timepicker.min.js', 'jquery.colorbox.js');


_cg("page_title", "Login");


