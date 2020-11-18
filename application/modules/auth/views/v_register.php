<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Management Toko Komputer">
    <meta name="keywords" content="Aplikasi Management Toko Komputer">
    <meta name="author" content="Pradana Industries">
    <title>Admin Register - Aplikasi Management Toko Komputer</title>
    <!-- BEGIN: CSS Assets-->
    <link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>img/icon/icon.png">
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>midone-template/css/app.css" />
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="login loading">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="#" class="-intro-x flex items-center pt-5">
                    <img alt="Logo" class="w-6" src="<?php echo base_url('assets/'); ?>img/icon/icon.png">
                    <span class="text-white text-lg ml-3"> Pradana<span class="font-medium">Komputer</span> </span>
                </a>
                <div class="my-auto">
                    <img alt="Foto Login" class="-intro-x w-1/2 -mt-16" src="<?php echo base_url('assets/'); ?>img/auth/register.png">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        Daftarkan Akun Anda
                        <br>
                        Untuk Memulai Session.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white">Kelola Dan Kontrol Semua Aktifitas Toko Komputer Anda</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign Up
                    </h2>
                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">Aplikasi Management Toko Komputer</div>
                    <div class="intro-x mt-8">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="First Name">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Last Name">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email">
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password">
                        <!-- <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-theme-9"></div>
                                <div class="col-span-3 h-full rounded bg-gray-200"></div>
                            </div>
                            <a href="#" class="intro-x text-gray-600 block mt-2 text-xs sm:text-sm">What is a secure password?</a> -->
                        <input type="text" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password Confirmation">
                    </div>
                    <div class="intro-x flex items-center text-gray-700 mt-4 text-xs sm:text-sm">
                        <input type="checkbox" class="input border mr-2" id="remember-me">
                        <label class="cursor-pointer select-none" for="remember-me">I agree to the Rules</label>
                        <a class="text-theme-1 ml-1" href="#">Privacy Policy</a>.
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <a class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3">Register</a>
                        <a class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 mt-3 xl:mt-0" href="<?php echo base_url() ?>">Sign in</a>
                    </div>
                </div>
            </div>
            <!-- END: Register Form -->
        </div>
    </div>
    <!-- BEGIN: JS Assets-->
    <script src="<?php echo base_url('assets/'); ?>midone-template/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>