<style type="text/css">
	
	.account-list{
		position: absolute !important;
	    bottom: 22px !important;
	    top: auto !important;
	    right: 295px !important;

	}

	.account-list-dropdown{
		position: absolute !important;
    	right: 100px !important;
    	bottom: 15px !important;
    	top: auto !important;
	}
</style>
<!-- Breadcrumb -->
<div class="content d-flex flex-column p-0" id="kt_content">
    <div class="toolbar" id="kt_toolbar">

        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">

            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <h1 class="d-none d-flex text-dark fw-bolder fs-3 align-items-center my-1"><?php echo $glb_breadcrumbs_title ?></h1>
                <span class="d-none h-20px border-gray-300 border-start mx-4"></span>

                <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                    <?php if(!empty($glb_breadcrumbs_arr)) {
                        $gbl_breadnumItems = count($glb_breadcrumbs_arr);
                        $gbl_bread_i = 0;
                        foreach($glb_breadcrumbs_arr as $gbl_breadcrumbs_data) { ?>
                            <li class="breadcrumb-item text-muted">
                                <a href="<?php echo $gbl_breadcrumbs_data["link"] ?>" class="<?php echo $gbl_breadcrumbs_data["class"] ?> text-hover-primary"><?php echo $gbl_breadcrumbs_data["title"] ?></a>
                            </li>
                            <?php if(++$gbl_bread_i != $gbl_breadnumItems) {?>
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-300 w-5px h-2px"></span>
                            </li>
                        <?php } }
                    } ?>
                </ul>
            </div>

            <!-- <div class="align-items-center">
                <span class="fw-bold pe-4 text-nowrap d-xxl-block account-list text-muted">Account</span> 
                <div class="float-end account-list-dropdown">
	                <select class="form-select form-select-sm form-select-md form-select-solid" id="account_select">
	                    <option value="all" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="all") ? "Selected":"" ?>>All Accounts</option>
	                    <option value="387" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="387") ? "Selected":"" ?>>Capstone Logistics</option>
	                    <option value="403" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="403") ? "Selected":"" ?>>Edge Logistics</option>
	                    <option value="397" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="397") ? "Selected":"" ?>>iFIT</option>
	                    <option value="364" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="364") ? "Selected":"" ?>>Transit Specialty Group</option>
	                    <option value="404" <?= (isset($_SESSION['account_id_set']) && $_SESSION['account_id_set']=="404") ? "Selected":"" ?>>Reliable Trans Solutions</option>
	                </select>
                </div>
            </div> -->
            
            <div class="d-flex align-items-stretch flex-shrink-0">
				<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
					<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
						<!-- <img src="<?php echo _MEDIA_URL.'img/zach-profile-photo.png' ?>" alt="image"> -->
						<p>BookStore</p>
					</div>
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
						<div class="menu-item px-3">
							<div class="menu-content d-flex align-items-center px-3">
								<!-- <div class="symbol symbol-50px me-5">
									<img alt="Logo" src="<?php echo _MEDIA_URL.'img/zach-profile-photo.png' ?>">
								</div> -->
								<div class="d-flex flex-column">
									<div class="fw-bold d-flex align-items-center fs-5"><?php echo $_SESSION['admin']['name'] ?></div>
									<a href="#" style="width: 175px;overflow-wrap: break-word;" class="fw-semibold text-muted text-hover-primary fs-7"><?php echo $_SESSION['admin']['email'] ?></a>
								</div>
							</div>
						</div>
						<!-- <div class="separator my-2"></div> -->
						<!-- <div class="menu-item px-5">
							<a href="<?= _U ?>myteam" class="menu-link px-5">My Team</a>
						</div>
						<div class="separator my-2"></div>
						<div class="menu-item px-5">
							<a href="<?= _U ?>reset_password" class="menu-link px-5">Reset Password</a>
						</div> -->
						<div class="separator my-2"></div>
						<div class="menu-item px-5">
							<a href="<?= _U ?>login?auth_logout=1" class="menu-link px-5">Sign Out</a>
						</div>						
					</div>
				</div>
				<div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
					<div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
						<span class="svg-icon svg-icon-1">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor"></path>
								<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor"></path>
							</svg>
						</span>
					</div>
				</div>
			</div>
        </div>
        
    </div>
