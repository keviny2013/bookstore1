<?php

$segment = $_REQUEST['q'];
$args    = explode("/", $segment);

$admin_id = _escape(helper::_adminId());


$_SESSION['active_page'] = $args[0];

// add process
if ((isset($_REQUEST['bookAdd'])) || (!empty($_REQUEST['addBookRecord']))) {
    $fields                 = array();
    $fields['user_id']     = $_SESSION['admin']['id'];
    $fields['title']     = $_REQUEST['title'];
    $fields['author']         = $_REQUEST['author'];
    $fields['description'] = $_REQUEST['description'];

    // print_r($_FILES);exit;
    
    $cover_img_error = "";
    $book_file_error = "";
    if ($_FILES["cover_img"]["name"] != '') {
        if (_isLocalMachine()) {
            $cover_img_dir = "instance/admin/media/cover_img/";
        } else {
            $cover_img_dir = "instance/admin/media/cover_img/";
        }

        $cover_file_extension =  pathinfo($_FILES["cover_img"]["name"], PATHINFO_EXTENSION);
        // generate file name
        $cover_image_name = uniqid() . "_" . time() . "." . $cover_file_extension;
        $cover_img_target_file = $cover_img_dir . $cover_image_name;

        $coverImageFileType = $cover_file_extension;
        if ($coverImageFileType != "jpg" && $coverImageFileType != "png" && $coverImageFileType != "jpeg" && $coverImageFileType != "gif") {
            $cover_img_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed for cover image.";
        } else {
            if (move_uploaded_file($_FILES["cover_img"]["tmp_name"],$cover_img_target_file)) {
                $fields['cover_img_path'] = $cover_image_name;
            } else {
                $error_message = "image not uploaded";
                $cover_img_upload_error = "Sorry, there was an error uploading your cover image.";
            }
        }
    }

    if ($_FILES["book_file"]["name"] != '') {
        if (_isLocalMachine()) {
            $book_file_dir = "instance/admin/media/book_file/";
        } else {
            $book_file_dir = "instance/admin/media/book_file/";
        }

        $book_file_extension =  pathinfo($_FILES["book_file"]["name"], PATHINFO_EXTENSION);
        $book_file_name = uniqid() . "_" . time() . "." . $book_file_extension;

        $book_file_target_file = $book_file_dir . $book_file_name;

        $bookFileType = strtolower(pathinfo($book_file_target_file, PATHINFO_EXTENSION));        
        
        if ($bookFileType != "pdf") {
            $book_file_error = "Sorry only PDF files are allowed for book file.";
        } else {
            if (move_uploaded_file($_FILES["book_file"]["tmp_name"], $book_file_target_file)) {
                $fields['file_path'] =  $book_file_name;
            } else {
                $book_file_upload_error = "Sorry, there was an error uploading your book file.";
            }
        }
    }
    
    if($cover_img_error === "" && $book_file_error === ""){
        if (isset($_REQUEST['book_id']) && $_REQUEST['book_id'] != '') {
            $edit_id = _escape($_REQUEST['book_id']);
            qu("books", _escapeArray($fields), "id='{$edit_id}'");
        
        } else {
            qi("books", _escapeArray($fields));
        
        }
        $success['msg'] = 'Record added succesfully';
    }
    else {
        $success['cover_img_error'] = $cover_img_error || '';
        $success['book_file_error'] = $book_file_error || '';
    }
    $success['code'] = 200;
    echo json_encode($success);
    die();
}
// end add process


// update process
if ((isset($_REQUEST['bookEdit'])) || (!empty($_REQUEST['EditBookRecord']))) {
    $fields                 = array();
    $fields['user_id']     = $_SESSION['admin']['id'];
    $fields['title']     = $_REQUEST['title'];
    $fields['author']         = $_REQUEST['author'];
    $fields['description'] = $_REQUEST['description'];

    // print_r($_FILES);exit;
    
    $cover_img_error = "";
    $book_file_error = "";
    if ($_FILES["cover_img"]["name"] != '') {
        if (_isLocalMachine()) {
            $cover_img_dir = "instance/admin/media/cover_img/";
        } else {
            $cover_img_dir = "instance/admin/media/cover_img/";
        }

        $cover_file_extension =  pathinfo($_FILES["cover_img"]["name"], PATHINFO_EXTENSION);
        // generate file name
        $cover_image_name = uniqid() . "_" . time() . "." . $cover_file_extension;
        $cover_img_target_file = $cover_img_dir . $cover_image_name;

        $coverImageFileType = $cover_file_extension;
        if ($coverImageFileType != "jpg" && $coverImageFileType != "png" && $coverImageFileType != "jpeg" && $coverImageFileType != "gif") {
            $cover_img_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed for cover image.";
        } else {
            if (move_uploaded_file($_FILES["cover_img"]["tmp_name"],$cover_img_target_file)) {
                $fields['cover_img_path'] = $cover_image_name;
            } else {
                $error_message = "image not uploaded";
                $cover_img_upload_error = "Sorry, there was an error uploading your cover image.";
            }
        }
    }

    if ($_FILES["book_file"]["name"] != '') {
        if (_isLocalMachine()) {
            $book_file_dir = "instance/admin/media/book_file/";
        } else {
            $book_file_dir = "instance/admin/media/book_file/";
        }

        $book_file_extension =  pathinfo($_FILES["book_file"]["name"], PATHINFO_EXTENSION);
        $book_file_name = uniqid() . "_" . time() . "." . $book_file_extension;

        $book_file_target_file = $book_file_dir . $book_file_name;

        $bookFileType = strtolower(pathinfo($book_file_target_file, PATHINFO_EXTENSION));        
        
        if ($bookFileType != "pdf") {
            $book_file_error = "Sorry only PDF files are allowed for book file.";
        } else {
            if (move_uploaded_file($_FILES["book_file"]["tmp_name"], $book_file_target_file)) {
                $fields['file_path'] =  $book_file_name;
                $fields['text_file_name'] =  "";
            } else {
                $book_file_upload_error = "Sorry, there was an error uploading your book file.";
            }
        }
    }
    
    if($cover_img_error === "" && $book_file_error === ""){
        if (isset($_REQUEST['book_id']) && $_REQUEST['book_id'] != '') {
            $edit_id = _escape($_REQUEST['book_id']);
            qu("books", _escapeArray($fields), "id='{$edit_id}'");
        
        } else {
            //qi("books", _escapeArray($fields));
        
        }
        $success['msg'] = 'Record updated succesfully';
    }
    else {
        $success['cover_img_error'] = $cover_img_error || '';
        $success['book_file_error'] = $book_file_error || '';
    }
    $success['code'] = 200;
    echo json_encode($success);
    die();
}
// end update process


if ($_REQUEST['deleteBookID'] == '1') {
// if (isset($_REQUEST['bookID']) && !empty($_REQUEST['bookID'])) {
    $fields['is_deleted'] = '1';
    $id          = _escape($_REQUEST['bookID']);
    qu("books", _escapeArray($fields), "id='{$id}'");

    echo json_encode($filterRecord);
    die();
}

// Convert PDF TO TEXT Process Start
//$_REQUEST['convertTextBookID'] = "1";
if ($_REQUEST['convertTextBookID'] == '1') {
    // if (isset($_REQUEST['bookID']) && !empty($_REQUEST['bookID'])) {
        $id          = _escape($_REQUEST['bookID']);
       // $id          = 11;

        $result = qs("SELECT * FROM books WHERE is_deleted='0' and id='".$id."' ");
        ini_set('memory_limit', '-1');
        include 'vendor/autoload.php';

        //  $book_file_dir = "instance/admin/media/book_file/Basic-Electronics.pdf";
    
        // // Initialize and load PDF Parser library 
        $parser = new \Smalot\PdfParser\Parser(); 
        
        // // Source PDF file to extract text 
        $file =  "instance/admin/media/book_file/".$result['file_path'];
    
        // // // Parse pdf file using Parser library 
        $pdf = $parser->parseFile($file); 
        
        
        // // // Extract text from PDF 
        $textContent = $pdf->getText();
        
       // print_r($textContent);die(); 
       $textContent = preg_replace('/\s+/', ' ', $textContent); 
       
       $book_txt_file_name = uniqid() . "_" . time() . ".txt" ;
       $fp = fopen("instance/admin/media/book_text_file/".$book_txt_file_name, "wb");
       fwrite($fp,$textContent);
       fclose($fp);
        
       $fields['text_file_name'] = $book_txt_file_name;
       qu("books", _escapeArray($fields), "id='{$id}'");
        //print_r();die();

        echo json_encode(array("status"=>"success"));
        die();
}
// Convert PDF TO TEXT Process End

$result = q("SELECT * FROM books WHERE is_deleted='0' and user_id='".$_SESSION['admin']['id']."' ");

$pageSpecificJS  = array();
$pageSpecificCSS = array();

$page      = "books";
$jsInclude = 'books.js.php';
_cg('page_title', 'Books');
