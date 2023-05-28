<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Mobilekit Mobile UI Kit</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="{{ asset('siswa/assets/css/style.css') }}">
    <link rel="manifest" href="{{ asset('siswa/__manifest.json') }}">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">@yield('pageTitle')</div>
        <div class="right">
            @yield('headerComponent')
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">@yield('pageTitle')</h1>
            <h2 class="subtitle">@yield('subMenuTitle')</h2>
        </div>
        <div class="section full mt-1">
            <div class="wide-block pt-2 pb-2">
                <a href="#" class="button goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>
        </div>

        {{-- //content placed here --}}
            @yield('content')
        {{-- end of content --}}

    </div>
    <!-- * App Capsule -->

    <!-- App Bottom Menu -->
    @include('layouts.siswa.partial.navbar')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    @include('layouts.siswa.partial.sidebar')
    <!-- * App Sidebar -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="{{ asset('siswa/assets/js/lib/jquery-3.4.1.min.js') }}"></script>
    @include('layouts.scripts.dataTable')
    @include('layouts.scripts.sweetalert')
    <!-- Bootstrap-->
    <script src="{{ asset('siswa/assets/js/lib/popper.min.js') }}"></script>
    <script src="{{ asset('siswa/assets/js/lib/bootstrap.min.js') }}"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="{{ asset('siswa/assets/js/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <!-- Base Js File -->
    <script src="{{ asset('siswa/assets/js/base.js') }}"></script>


</body>

</html>