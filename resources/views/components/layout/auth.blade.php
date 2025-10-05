@props(['title' => 'Login - Layanan Darurat Kendaraan'])
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from dreamstour.dreamstechnologies.com/html/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 Oct 2025 04:35:51 GMT -->

    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >
        <title>{{ $title }}</title>

        <!-- Apple Touch Icon -->
        <x-link
            rel="apple-touch-icon"
            sizes="180x180"
            href="assets/img/apple-touch-icon.png"
        />

        <!-- Favicon -->
        <x-link
            rel="icon"
            href="assets/img/favicon.png"
            type="image/x-icon"
        />
        <x-link
            rel="shortcut icon"
            href="assets/img/favicon.png"
            type="image/x-icon"
        />

        <x-link
            rel="stylesheet"
            href="assets/css/bootstrap.min.css"
        />

        <!-- Main.css -->
        <x-link
            rel="stylesheet"
            href="assets/css/meanmenu.css"
        />

        <!-- Tabler Icon CSS -->
        <x-link
            rel="stylesheet"
            href="assets/plugins/tabler-icons/tabler-icons.css"
        />

        <!-- Fontawesome Icon CSS -->
        <x-link
            rel="stylesheet"
            href="assets/plugins/fontawesome/css/fontawesome.min.css"
        />
        <x-link
            rel="stylesheet"
            href="assets/plugins/fontawesome/css/all.min.css"
        />

        <!-- Owlcarousel CSS -->
        <x-link
            rel="stylesheet"
            href="assets/plugins/owlcarousel/owl.carousel.min.css"
        />

        <!-- Rangeslider CSS -->
        <x-link
            rel="stylesheet"
            href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.css"
        />
        <x-link
            rel="stylesheet"
            href="assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css"
        />

        <!-- Iconsax CSS -->
        <x-link
            rel="stylesheet"
            href="assets/css/iconsax.css"
        />

        <!-- Datepicker CSS -->
        <x-link
            rel="stylesheet"
            href="assets/css/bootstrap-datetimepicker.min.css"
        />

        <!-- Style CSS -->
        <x-link
            rel="stylesheet"
            href="assets/css/style.css"
        />

        @vite(['resources/js/app.js', 'resources/css/app.css'])

    </head>

    <body class="bg-light-200">

        <!-- Main Wrapper -->
        <div class="main-wrapper authentication-wrapper">
            <div class="container-fuild">
                <div class="w-100 position-relative d-block vh-100 flex-wrap overflow-hidden">
                    <div class="row justify-content-center align-items-center vh-100 flex-wrap overflow-auto">
                        <div class="col-xxl-4 col-lg-6 col-md-6 col-11 mx-auto">
                            <div class="p-4 text-center">
                                <center>
                                    <img
                                        src="assets/img/logo-dark.svg"
                                        alt="logo"
                                        class="img-fluid"
                                    >
                                </center>
                            </div>
                            <div class="card authentication-card">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coprright-footer">
                <p class="fs-14">Copyright &copy; 2025. All Rights Reserved, <a
                        href="javascript:void(0);"
                        class="text-primary fw-medium"
                    >DreamsTour</a></p>
            </div>
        </div>
        <!-- /Main Wrapper -->

        <!-- Cursor -->
        <div class="xb-cursor tx-js-cursor">
            <div class="xb-cursor-wrapper">
                <div class="xb-cursor--follower xb-js-follower"></div>
            </div>
        </div>
        <!-- /Cursor -->

        <!-- Jquery JS -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>

        <!-- MeanMenu Js -->
        <script src="assets/js/jquery.meanmenu.min.js"></script>

        <!-- Datepicker Core JS -->
        <script src="assets/plugins/moment/moment.js"></script>
        <script src="assets/js/bootstrap-datetimepicker.min.js"></script>

        <!-- cursor JS -->
        <script src="assets/js/cursor.js"></script>

        <!-- Script JS -->
        <script src="assets/js/script.js"></script>
    </body>

</html>
