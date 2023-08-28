<?php if (!file_exists(_PATH . "instance/admin/tpl/" . $modulePage)) : ?>
    <?php include _PATH . "instance/admin/tpl/404.php"; ?>
    <?php header("HTTP/1.0 404 Not Found"); ?>
    <?php die; ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="#">
        <title>BookStore - <?= _cg('page_title') ?></title>
        <meta charset="utf-8" />
        <meta name="description" content="BookStore" />
        <meta name="keywords" content="BookStore" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="BookStore" />
        <meta property="og:title" content="BookStore - Login" />
        <meta property="og:url" content="https://configuration-app-7mkvehfthq-ue.a.run.app/" />
        <meta property="og:site_name" content="Xymogen-Shopify Connector" />
        <link rel="shortcut icon" href="<?php print _MEDIA_URL ?>img/transit-favicon.png" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php print _MEDIA_URL ?>theme_files/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php print _MEDIA_URL ?>theme_files/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?php print _MEDIA_URL ?>theme_files/assets/css/login_new.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    </head>
    <body id="kt_body" class="" style="background-image: url(<?php print _MEDIA_URL ?>/img/bookstore.avif);background-repeat: no-repeat;background-position: 100%;background-size:100%">
            <!-- <div class="loader" id="script_loader" style="position: fixed; left: 0px; top: 0px; width: 100%; height: 100%; z-index: 9999;background: url('<?= _MEDIA_URL . "img/loader.svg"; ?>') 50% 50% no-repeat rgb(249,249,249);">
            </div> -->
        <div class="centered-loader" style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); transform: -webkit-translate(-50%, -50%); transform: -moz-translate(-50%, -50%); transform: -ms-translate(-50%, -50%); color:darkred; z-index: 99999; display: none;">
            <h1>Loading...</h1>
        </div>
        <?php include _PATH . 'instance/admin/tpl/' . $modulePage; ?>

        <script src="<?php print _MEDIA_URL ?>js/jquery.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/scripts.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/authentication/sign-in/general.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/widgets.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/widgets.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/apps/chat/chat.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/create-app.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/users-search.js"></script>

        <?php include _PATH . 'instance/admin/tpl/pageSpecificJS.php'; ?>


        <!-- Core plugin JavaScript-->
        <script src="<?php echo _MEDIA_URL ?>theme_files/vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo _MEDIA_URL ?>theme_files/js/sb-admin-2.min.js"></script>

        <?php @include _PATH . 'instance/admin/tpl/' . $jsInclude; ?>

    </body>
</html>