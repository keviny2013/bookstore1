<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>BookStore- <?php print _cg('page_title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="Modular Hierarchy.">
        <meta name="msapplication-tap-highlight" content="no">

        <!-- libraries -->
        <!--<link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/libs/font-awesome.css" />-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>css/libs/nanoscroller.css" />

        <!-- global styles -->
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>theme_files/css/compiled/theme_styles.css?c=<?= time() ?>" />
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>theme_files/css/compiled/style.css" />

        <!-- this page specific styles -->
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/libs/fullcalendar.css" type="text/css" />
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/libs/fullcalendar.print.css" type="text/css" media="print" />
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/compiled/calendar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/libs/morris.css" type="text/css" />
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/libs/daterangepicker.css" type="text/css" />
        <link rel="stylesheet" href="<?php print _MEDIA_URL ?>css/libs/jquery-jvectormap-1.2.2.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/sweetalert2/src/sweetalert2.css">

        <!-- Favicon -->
        <!-- <link type="image/x-icon" href="favicon.ico" rel="shortcut icon" /> -->
        <link type="image/x-icon" href="<?php print _MEDIA_URL ?>img/favicon.png" rel="shortcut icon" />

        <?php include _PATH . 'instance/admin/tpl/pageSpecificCSS.php'; ?>
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-main">
                <div class="app-main__outer">
                    <div id="error-box">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="error-box-inner">
                                    <img src="<?php print _MEDIA_URL ?>theme_files/img/error-404-v3.png" alt="Have you seen this page?"/>
                                </div>
                                <h1>ERROR 404</h1>
                                <p>
                                    Page not found.<br/>
                                    If you find this page, let us know.
                                </p>
                                <p>
                                    Go back to <a href="<?= _U_ADMIN ?>">homepage</a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="<?php print _MEDIA_URL ?>js/jquery.js"></script>
        <script src="<?php print _MEDIA_URL ?>js/jquery.nanoscroller.min.js"></script>

        <script src="<?php print _MEDIA_URL ?>js/demo.js"></script> <!-- only for demo -->

        <?php include _PATH . 'instance/admin/tpl/pageSpecificJS.php'; ?>

        <!-- theme scripts -->
        <script src="<?php print _MEDIA_URL ?>js/scripts.js"></script>
        <script src="<?php print _MEDIA_URL ?>js/pace.min.js"></script>
        <script src="<?php print _MEDIA_URL ?>js/parsley.min.js"></script>
        <script src="<?php print _MEDIA_URL ?>assets/sweetalert2/src/sweetalert2.all.js"></script>
        <script type="text/javascript" src="<?php print _MEDIA_URL ?>theme_files/js/theme_files.js"></script>

    </body>
</html>