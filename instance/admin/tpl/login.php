<div id="app" data-v-app="" style="">
    <div id="app-container" class="relative min-h-screen">
        <div class="mt-4 mb-0 flex items-center justify-center">
            <a class="">
                <!-- <img class="h-16" src="https://www.onpointe360.com/instance/admin/media/theme_files/img/op360-new.png" /> -->
                <img class="h-16" src="<?php print _MEDIA_URL ?>/img/logo.png" />
            </a>
        </div>
        <div class="background-img flex items-center justify-between" style="opacity: 0.9;">
            <div class="size-box bg-white rounded-lg shadow">
                <div class="flex flex-col justify-center h-full">
                    <form method="post" id='login_form' class="login_form">
                        <p class="text-4xl font-medium mb-10">Log in with your email.</p>
                        <p class="login-box-msg">
                            <?php if (isset($error) && !empty($error)): ?>
                                <div class="alert alert-danger wrap-input100">
                                    <i class="fa fa-times-circle fa-fw fa-lg"></i>                        
                                    <?= $error; ?>
                                </div>
                            <?php endif; ?>    
                        </p>
                        <div class="flex flex-col">
                            <label class="text-xs font-bold ml-1 mb-1">EMAIL</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email address" class="bg-gray-100 btn p-4 rounded-lg mr-4 focus:bg-white" style="text-align:left" required />
                        </div>
                        <div class="flex flex-col"><br></div>
                        <div class="flex flex-col">
                            <label class="text-xs font-bold ml-1 mb-1">PASSWORD</label>
                            <input type="password" id="password" name="password" placeholder="Enter your password" class="bg-gray-100 btn p-4 rounded-lg mr-4 focus:bg-white" style="text-align:left" required />
                            <div>
                                <div class="form-group col-md-12">
                                    <!-- <a href="<?= _U ?>forgot_password" class="mb-2">Forgot Password?</a> -->
                                    <a href="javascript:void(0)" class="mb-2">Forgot Password?</a>
                                </div>

                                <button type="submit" class="py-3 px-3 rounded-md flex items-center justify-center cursor-default text-white w-full mt-4 h-14" style="background-color:#ffb607">
                                    <div class="flex items-center w-full justify-center login"> Login <!----></div>
                                </button>
                            </div>
                        </div>
                    </form>
                   
                </div>
            </div>
        </div>

        <div class="w-full bg-dark-gray h-12 absolute bottom-0">
    <div class="container-max px-4 md:px-10 h-full mx-auto">
        <div id="footer" class="h-full w-full flex justify-center items-center text-white text-center">
            <span class="text-2xs">© 2023 BookStore, Inc. All Rights Reserved.</span>
        </div>
    </div>
</div>
    </div>
</div>

<script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-MW7NXHB"></script>