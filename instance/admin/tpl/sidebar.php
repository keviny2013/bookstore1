<style type="text/css">
    .aside.aside-dark{
        background-color: #1a1a27 !important;
    }
</style>
<style>

</style>
<div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="<?= _U ?>dashboard">
            <img alt="Logo" src="<?php print _MEDIA_URL ?>theme_files/img/logo.png" class="h-50px logo" alt="BookStore" style="height: 45px!important;"  /> <span class="header_logo"></span>
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
            <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor" />
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <!--begin::Aside Menu-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="0">
            <!--begin::Menu-->

            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a href="<?= _U ?>dashboard" class="menu-link <?= ($page == "dashboard" ? "active" : "")?>" id="dashboardMenuLink">
                        <span class="menu-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"/>
                                        <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="<?= ($page == "dashboard" ? "#2980b9" : "#ffffff")?>"/>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Dashboard</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="<?= _U ?>books" class="menu-link <?= ($page == "books" ? "active" : "")?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-book" style="margin-left: 5px;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Books</span>
                    </a>
                </div>

                <!-- <div class="menu-item">
                    <a href="<?= _U ?>open_claims" class="menu-link <?= ($page == "open_claims" ? "active" : "")?>">
                        <span class="menu-icon">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                   <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                        <path fill="#ffffff" d="M479.982-280q14.018 0 23.518-9.482 9.5-9.483 9.5-23.5 0-14.018-9.482-23.518-9.483-9.5-23.5-9.5-14.018 0-23.518 9.482-9.5 9.483-9.5 23.5 0 14.018 9.482 23.518 9.483 9.5 23.5 9.5ZM453-433h60v-253h-60v253Zm27.266 353q-82.734 0-155.5-31.5t-127.266-86q-54.5-54.5-86-127.341Q80-397.681 80-480.5q0-82.819 31.5-155.659Q143-709 197.5-763t127.341-85.5Q397.681-880 480.5-880q82.819 0 155.659 31.5Q709-817 763-763t85.5 127Q880-563 880-480.266q0 82.734-31.5 155.5T763-197.684q-54 54.316-127 86Q563-80 480.266-80Zm.234-60Q622-140 721-239.5t99-241Q820-622 721.188-721 622.375-820 480-820q-141 0-240.5 98.812Q140-622.375 140-480q0 141 99.5 240.5t241 99.5Zm-.5-340Z"/>
                                    </svg>

                                </span>
                            </span>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Open Claims</span>
                    </a>
                </div> -->
                <!-- <div class="menu-item">
                    <a href="<?= _U ?>pending_claims" class="menu-link <?= ($page == "pending_claims" ? "active" : "")?>">
                        <span class="menu-icon">
                            <span class="menu-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <span class="svg-icon svg-icon-primary svg-icon-2x">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#ffffff"/>
                                                <path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#ffffff" opacity="1"/>
                                            </g>
                                        </svg>
                                    </span>
                                </span>

                            </span>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Pending Claims</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>closed_claims" class="menu-link <?= ($page == "closed_claims" ? "active" : "")?>">
                        <span class="menu-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                     <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                        <path fill="#ffffff" d="m421-298 283-283-46-45-237 237-120-120-45 45 165 166Zm59 218q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z"/>
                                    </svg>

                                </span>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Closed Claims</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>suspended_claims" class="menu-link <?= ($page == "suspended_claims" ? "active" : "")?>">
                        <span class="menu-icon">
                                <span class="svg-icon svg-icon-primary svg-icon-2x">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
                                        <path d="M370-320h60v-320h-60v320Zm160 0h60v-320h-60v320ZM480-80q-82 0-155-31.5t-127.5-86Q143-252 111.5-325T80-480q0-83 31.5-156t86-127Q252-817 325-848.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 82-31.5 155T763-197.5q-54 54.5-127 86T480-80Zm0-60q142 0 241-99.5T820-480q0-142-99-241t-241-99q-141 0-240.5 99T140-480q0 141 99.5 240.5T480-140Zm0-340Z" fill="#FFFFFF"/>
                                    </svg>


                                </span>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Suspended Claims</span>
                    </a>
                </div> -->
               <?php /*?> <div class="menu-item">
                    <a href="<?= _U ?>dashboard_2" class="menu-link <?= ($page == "dashboard_2" ? "active" : "")?>">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                              <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                            </svg>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">CEO Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>dashboard_3" class="menu-link <?= ($page == "dashboard_3" ? "active" : "")?>">
                        <span class="menu-icon">
                            <i class="bi bi-back"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Operation Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>dashboard_4" class="menu-link <?= ($page == "dashboard_4" ? "active" : "")?>">
                        <span class="menu-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                              <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                            </svg>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Sales Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>roadmap" class="menu-link <?= ($page == "roadmap" ? "active" : "")?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-sitemap" style="margin-left: 5%;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Roadmap</span>
                    </a>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link <?php echo in_array($page, array("company", "department", "employee", "division", "section", "team")) ? "active" : "" ?>" href="<?php echo _U_ADMIN . "company" ?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-cogs" style="margin-left: 5%;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Setup</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" kt-hidden-height="201" style="display: none; overflow: hidden;">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link <?php echo in_array($page, array("company", "department", "employee", "division", "section", "team")) ? "active" : "" ?>" href="<?php echo _U_ADMIN . "company" ?>">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">Company</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion" kt-hidden-height="242" style="display: none; overflow: hidden;">
                                <div class="menu-item">
                                    <a class="menu-link <?php echo $page == "company" ? "active" : "" ?>" href="<?php echo _U_ADMIN . "company" ?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Company</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>division" class="menu-link <?= ($page == "division" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Division</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>department" class="menu-link <?= ($page == "department" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Department</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>section" class="menu-link <?= ($page == "section" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Section/Group</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>team" class="menu-link <?= ($page == "team" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Team</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>employee" class="menu-link <?= ($page == "employee" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Employee</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link <?php echo in_array($page, array("kpi_template", "employee_template", "kpi", "kpi_components")) ? "active" : "" ?>" href="javascript:void(0);">
                                <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                <span class="menu-title">KPI</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion" kt-hidden-height="242" style="display: none; overflow: hidden;">
                                <div class="menu-item">
                                    <a href="<?= _U ?>kpi_template" class="menu-link <?= ($page == "kpi_template" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Department Template</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>employee_template" class="menu-link <?= ($page == "employee_template" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Employee Template</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>kpi_components" class="menu-link <?= ($page == "kpi_components" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">KPI Components</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a href="<?= _U ?>kpi" class="menu-link <?= ($page == "kpi" ? "active" : "")?>">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title" style="margin-left: 5%;">Kpi</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link <?php echo in_array($page, array("kpi_reports")) ? "active" : "" ?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-bars" style="margin-left: 5%;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Reports</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a href="<?= _U ?>kpi_reports" class="menu-link <?= ($page == "kpi_reports" ? "active" : "")?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title" style="margin-left: 5%;">Kpi Report</span>
                            </a>
                        </div>
                    </div>
                </div> <?php */?>
                
                <!-- <div class="menu-item">
                    <a href="<?= _U ?>scheduler" class="menu-link <?= ($page == "scheduler" ? "active" : "")?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-clock" style="margin-left: 5%;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Scheduler</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="<?= _U ?>frequency" class="menu-link <?= ($page == "frequency" ? "active" : "")?>">
                        <span class="menu-icon">
                            <i class="nav-icon fa fa-american-sign-language-interpreting" style="margin-left: 5%;"></i>
                        </span>
                        <span class="menu-title" style="margin-left: 5%;">Frequency</span>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>