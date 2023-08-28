<?php 
	include_once '../config/config.php';
	$title = isset($pageTitle) ? $pageTitle : 'Xymogen-Shopify Connectors'; 
	$metaDescription = isset($metaDescription) ? $metaDescription : 'Xymogen-Shopify Connector'; 
	$metaKeywords = isset($metaKeywords) ? $metaKeywords : 'Xymogen-Shopify Connector';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="../../../">
		<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="<?php echo $metaDescription; ?>" />
		<meta name="keywords" content="<?php echo $metaKeywords; ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="<?php echo $pageTitle; ?>" />
		<meta property="og:url" content="https://configuration-app-7mkvehfthq-ue.a.run.app/" />
		<meta property="og:site_name" content="Xymogen-Shopify Connector" />
		<link rel="shortcut icon" href="<?= BASE_URL ?>assets/theme/assets/media/logos/logo.png" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="<?= BASE_URL ?>assets/theme/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= BASE_URL ?>assets/theme/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= BASE_URL ?>assets/theme/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?= BASE_URL ?>assets/theme/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body id="kt_body" class="">
		<!-- <div class="loader" id="script_loader" style="position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999;background: url('<?= BASE_URL . "assets/loader_img/loader.svg"; ?>') 50% 50% no-repeat rgb(249,249,249);">
		</div> -->
		<div class="centered-loader" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); transform: -webkit-translate(-50%, -50%); transform: -moz-translate(-50%, -50%); transform: -ms-translate(-50%, -50%); color:darkred; z-index: 99999; display: none;">
          <h1>Loading...</h1>
        </div>