<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Newzin</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/client/assets/img/fav.png" title="Favicon" sizes="16x16" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="/client/assets/css/lib/bootstrap.min.css">

    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- ionicons icons  -->
    <link rel="stylesheet" href="/client/assets/css/lib/ionicons.css">
    <!-- line-awesome icons  -->
    <link rel="stylesheet" href="/client/assets/css/lib/line-awesome.css">
    <!-- animate css  -->
    <link rel="stylesheet" href="/client/assets/css/lib/animate.css" />
    <!-- fancybox popup  -->
    <link rel="stylesheet" href="/client/assets/css/lib/jquery.fancybox.css" />
    <!-- lity popup  -->
    <link rel="stylesheet" href="/client/assets/css/lib/lity.css" />
    <!-- swiper slider  -->
    <link rel="stylesheet" href="/client/assets/css/lib/swiper.min.css" />
    <!-- css library -->
    @stack('css_library')

    <!-- ====== main style ====== -->
    <link rel="stylesheet" href="/client/assets/css/style.css" />
    <!-- ====== sub style ====== -->
    @stack('css')

    <title> Newzin </title>
</head>

<body class="home-style1 @yield('home-style')">

    <!-- ====== start loading page ====== -->
    @yield('loading-page')
    <!-- ====== end loading page ====== -->


    <!-- ====== start navbar-container ====== -->
    <div class="navbar-container">
        <div class="container">
            @include('client.layouts.components.header')
        </div>
    </div>
    <!-- ====== start navbar-container ====== -->

    <!--Contents-->
    <main>

        @yield('content')

        <!-- ====== Start Modals ====== -->
        @include('client.layouts.components.modals-side-bar')
        @yield('modals')
        <!-- ====== End Modals ====== -->
    </main>
    <!--End-Contents-->

    <!-- ====== start footer ====== -->
    <footer class="footer-style1">
        @include('client.layouts.components.footer')
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <!-- <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102"><path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 220.587;"></path></svg>
    </div> -->
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="/client/assets/js/lib/jquery-3.0.0.min.js"></script>
    <script src="/client/assets/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="/client/assets/js/lib/bootstrap.bundle.min.js"></script>
    <script src="/client/assets/js/lib/wow.min.js"></script>
    <script src="/client/assets/js/lib/jquery.fancybox.js"></script>
    <script src="/client/assets/js/lib/lity.js"></script>
    <script src="/client/assets/js/lib/swiper.min.js"></script>
    <script src="/client/assets/js/lib/jquery.waypoints.min.js"></script>
    <script src="/client/assets/js/lib/jquery.counterup.js"></script>
    <!-- <script src="/client/assets/js/lib/pace.js"></script> -->
    <script src="/client/assets/js/lib/back-to-top.js"></script>
    <script src="/client/assets/js/lib/parallaxie.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('js_library')

    <script src="/client/assets/js/main.js"></script>
    <script>
        $('#btn-logout').on('click', function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: 'me-2'
            });
            swalWithBootstrapButtons.fire({
                title: "Do you want logout?",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-logout').submit();
                }
            });
        });
        @if (session('alert') && session('alert') == 'login-success')
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Login successfully !',
            });
        @endif
        @if (session('alert') && session('alert') == 'logout-success')
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Logout successfully !',
            });
        @endif
    </script>
    @stack('js')


</body>

</html>
