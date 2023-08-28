<?php

$segment = $_REQUEST['q'];
$args    = explode("/", $segment);

$admin_id = _escape(helper::_adminId());

$_SESSION['active_page'] = $args[0];


if ((isset($_REQUEST['bookAdd'])) || (!empty($_REQUEST['addBookRecord']))) {
   
    $fields                 = array();
    $fields['title']     = $_REQUEST['title'];
    $fields['auther']         = $_REQUEST['auther'];
    $fields['description'] = $_REQUEST['description'];

    if (isset($_REQUEST['book_id']) && $_REQUEST['book_id'] != '') {
        $edit_id = _escape($_REQUEST['book_id']);
         qu("books", _escapeArray($fields), "id='{$edit_id}'");
     
    } else {
         qi("books", _escapeArray($fields));
       
    }

    $success['code'] = 200;
    echo json_encode($success);
    die();
}

$result = q("SELECT * FROM books WHERE is_deleted='0' and user_id='".$_SESSION['admin']['id']."' ");

$pageSpecificJS  = array();
$pageSpecificCSS = array();

$page      = "books";
$jsInclude = 'books.js.php';
_cg('page_title', 'Books');
