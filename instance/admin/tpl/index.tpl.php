<?php if (!file_exists(_PATH . "instance/admin/tpl/" . $modulePage)): ?>
    <?php include _PATH . "instance/admin/tpl/404.php"; ?>
    <?php header("HTTP/1.0 404 Not Found"); ?>
    <?php die; ?>
<?php endif; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="en">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>BooksStore - <?= _cg('page_title') ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="description" content="Onpoint360 - <?= _cg('page_title') ?>">
        <meta name="msapplication-tap-highlight" content="no">

        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />

        <link type="image/x-icon" href="<?= _MEDIA_URL ?>img/transit-favicon.png" rel="shortcut icon" />

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

        <link href="<?= _MEDIA_URL ?>theme_files/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?= _MEDIA_URL ?>theme_files/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?= _MEDIA_URL; ?>plugins/daterangepicker/daterangepicker.css">
        
        <link href="<?= _MEDIA_URL ?>theme_files/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?= _MEDIA_URL ?>theme_files/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <link href="<?= _MEDIA_URL ?>css/compiled/style.css" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="<?php print _MEDIA_URL ?>assets/sweetalert2/src/sweetalert2.css">
        <link rel="stylesheet" type="text/css" href="<?= _MEDIA_URL; ?>plugins/sweetalert2/sweetalert2.min.css">
        
        <?php include _PATH . 'instance/admin/tpl/pageSpecificCSS.php'; ?>
    </head>
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
        <?php include _PATH . "instance/admin/tpl/sidebar.php"; ?>

        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <?php include _PATH . "instance/admin/tpl/topbar.php"; ?>
            <!-- NOTE : BREADCRUMBS DIV START IN A TOPBAR AND END HERE -->
            </div>


            <?php include _PATH . 'instance/admin/tpl/' . $modulePage; ?>


            <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">

                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">

                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted fw-bold me-1"><?php echo date('Y');?> &copy; BookStore. All Rights Reserved.</span>
                        <a href="<?php echo _U_ADMIN . "dashboard" ?>" target="_blank" class="text-gray-800 text-hover-primary"></a>
                    </div>

                </div>
            </div>
        </div>

        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/global/plugins.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/scripts.bundle.js"></script>

        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/plugins/custom/datatables/datatables.bundle.js"></script>

        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/widgets.bundle.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/widgets.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/apps/chat/chat.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/create-app.js"></script>
        <script src="<?php print _MEDIA_URL ?>theme_files/assets/js/custom/utilities/modals/users-search.js"></script>
        
        <!-- daterangepicker -->
        <script src="<?= _MEDIA_URL; ?>plugins/moment/moment.min.js"></script>
        <script src="<?= _MEDIA_URL; ?>plugins/daterangepicker/daterangepicker.js"></script>

        <script src="<?php print _MEDIA_URL ?>assets/bootstrap-notify-master/bootstrap-notify.js"></script>
        <script src="<?php print _MEDIA_URL ?>assets/sweetalert2/src/sweetalert2.all.js"></script>

        <!-- <script src="<?php print _MEDIA_URL ?>theme_files/js/ag-grid-community-new.min.js"></script> -->

        <?php include _PATH . 'instance/admin/tpl/pageSpecificJS.php'; ?>


        <!-- theme scripts -->
        <!-- <script src="<?= _MEDIA_URL ?>js/scripts.js"></script>
        <script src="<?= _MEDIA_URL ?>js/pace.min.js"></script>
        <script src="<?= _MEDIA_URL ?>js/parsley.min.js"></script> -->

        <?php @include _PATH . 'instance/admin/tpl/' . $jsInclude; ?>

        <!-- <script src="<?= _MEDIA_URL ?>datatable_js/datatables.min.js"></script>
        <script type="text/javascript">
            $(".zero_config").DataTable({
                "paging": true,
                "bInfo": true,
                "searching": true,
                "columnDefs": [
                    { "orderable": false, "targets": [0,1,2] },
                ],
            });
        </script> -->
    </body>
</html>

<style>
.container-xxl{
    max-width:100% !important;
}

</style>

<script type="text/javascript">


function showLoading() 
{
    var sweet_loader = `<div class="sweet_loader">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;display:block;" width="140px" height="140px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                            <defs>
                             <mask id="ldio-vbev8qi60k-mask">
                               <circle cx="50" cy="50" r="14" stroke="#fff" stroke-linecap="round" stroke-dasharray="65.97344572538566 21.991148575128552" stroke-width="2">
                                 <animateTransform attributeName="transform" type="rotate" values="0 50 50;360 50 50" times="0;1" dur="0.8474576271186441s" repeatCount="indefinite"></animateTransform>
                               </circle>
                             </mask>
                            </defs>
                            <g mask="url(#ldio-vbev8qi60k-mask)"><rect x="33.5" y="0" width="7.4" height="100" fill="#e15b64">
                              <animate attributeName="fill" values="#e15b64;#f47e60;#f8b26a;#abbd81;#849b87" times="0;0.25;0.5;0.75;1" dur="0.8474576271186441s" repeatCount="indefinite" begin="-0.8s"></animate>
                            </rect><rect x="39.9" y="0" width="7.4" height="100" fill="#f47e60">
                              <animate attributeName="fill" values="#e15b64;#f47e60;#f8b26a;#abbd81;#849b87" times="0;0.25;0.5;0.75;1" dur="0.8474576271186441s" repeatCount="indefinite" begin="-0.6s"></animate>
                            </rect><rect x="46.3" y="0" width="7.4" height="100" fill="#f8b26a">
                              <animate attributeName="fill" values="#e15b64;#f47e60;#f8b26a;#abbd81;#849b87" times="0;0.25;0.5;0.75;1" dur="0.8474576271186441s" repeatCount="indefinite" begin="-0.4s"></animate>
                            </rect><rect x="52.7" y="0" width="7.4" height="100" fill="#abbd81">
                              <animate attributeName="fill" values="#e15b64;#f47e60;#f8b26a;#abbd81;#849b87" times="0;0.25;0.5;0.75;1" dur="0.8474576271186441s" repeatCount="indefinite" begin="-0.2s"></animate>
                            </rect><rect x="59.1" y="0" width="7.4" height="100" fill="#849b87">
                              <animate attributeName="fill" values="#e15b64;#f47e60;#f8b26a;#abbd81;#849b87" times="0;0.25;0.5;0.75;1" dur="0.8474576271186441s" repeatCount="indefinite" begin="0s"></animate>
                            </rect></g>
                            </svg>
                        </div>`;

    Swal.fire({
        //title: 'Loading...',
        html: sweet_loader,
        showCancelButton: false,
        showConfirmButton: false,
        allowOutsideClick: false
    });

    $(".swal2-modal").css('background-color', 'rgb(0 0 0 / 0%)');//Optional changes the color of the sweetalert 
}
    
    $(document).ready(function() {
        $("#account_select").change(function() {
            var selectedValue = $(this).val();
            // if(selectedValue=='')
            // {
            //     alert("Select Account")
            //     return
            // }else{
                //alert("You selected: " + selectedValue);
             $.ajax({
                type: "POST",
                url: "<?php echo _U ?>data_loader",
                data: {
                    Account_id:selectedValue,
                    account_selection:'1'
                },
                beforeSend: function() {
                    showLoading();
                },
                success: function(data) {
                    $(".load_html_data").html("");
                     $(".swal2-container").css("display", "none");
                    var jsonParse = JSON.parse(data);
                    $(".load_html_data").html(jsonParse.views);
                }
            });

            // }
            
        });
    });


</script>

<script type="text/javascript">
        
    function load_views_account_wise()
    {
         $.ajax({
            type: "POST",
            url: "<?php echo _U ?>data_loader",
            data: {
                defalut_view:'1'
            },
             beforeSend: function() {
                showLoading();
            },
            success: function(data) {

                $(".load_html_data").html("");
               $(".swal2-container").css("display", "none");
                var jsonParse = JSON.parse(data);
               $(".load_html_data").html(jsonParse.views);
               
            }
        });

    }

    
    $(document).ready(function() 
    {

        //load_views_account_wise();

        var sortingOrder = "ASC"; // Initial sorting order

        $(document).on("click",".table_filter",function (){

            var colummnVal = $(this).attr("data-columnnm");
            var sortIcon = $(this).find(".sort-icon i");

            sortingOrder = sortingOrder === "ASC" ? "DESC" : "ASC";
            
             $.ajax({
                type: "POST",
                url: "<?php echo _U ?>data_loader",
                data: {
                    colummnVal:colummnVal,
                    sortingOrder:sortingOrder,
                    filterAjax:'1'
                },
                dataType:"JSON",
                success: function(data) 
                {
                    $(".load_html_data").html("");
                    $(".load_html_data").html(data.views);               
                }
            })
        });
    });

</script>