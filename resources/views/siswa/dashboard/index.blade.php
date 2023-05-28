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

<body>

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- * loader -->

    <!-- App Header -->
    <div class="appHeader bg-primary scrolled">
        {{-- <div class="left">
            <a href="{{ 'dashboard.user.' }}" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div> --}}
        <div class="pageTitle">
            Discover
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
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
            <h1 class="title">Discover</h1>
            <h4 class="subtitle">Welcome to Mobilekit</h4>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme owl-loaded owl-drag">

                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2088px; padding-left: 32px; padding-right: 32px;">
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}" class="card-img-top"
                                        alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d4.jpg') }}" class="card-img-top"
                                        alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Change the styles in one file</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d5.jpg') }}" class="card-img-top"
                                        alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Written with a code structure</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d1.jpg') }}" class="card-img-top"
                                        alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Progressive web app ready</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d2.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Reusable components</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d4.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Change the styles in one file</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d5.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Written with a code structure</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d1.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Progressive web app ready</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d2.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Reusable components</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 168px; margin-right: 16px;">
                            <div class="item">
                                <div class="card">
                                    <img src="{{ asset('siswa/assets/img/sample/photo/d3.jpg') }}"
                                        class="card-img-top" alt="image">
                                    <div class="card-body pt-2">
                                        <h4 class="mb-0">Great for phones &amp; tablets</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                            aria-label="Previous">‹</span></button><button type="button" role="presentation"
                        class="owl-next"><span aria-label="Next">›</span></button></div>
                <div class="owl-dots disabled"></div>
            </div>

        </div>


        <div class="section mt-3 mb-3">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-end">
                    <div>
                        <h6 class="card-subtitle">Discover</h6>
                        <h5 class="card-title mb-0 d-flex align-items-center justify-content-between">
                            Dark Mode
                        </h5>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input dark-mode-switch" id="darkmodeswitch">
                        <label class="custom-control-label" for="darkmodeswitch"></label>
                    </div>

                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="{{ asset('siswa/assets/img/sample/photo/wide4.jpg') }}" class="card-img-top"
                    alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Discover</h6>
                    <h5 class="card-title">Components</h5>
                    <p class="card-text">
                        Reusable components designed for the mobile interface and ready to use.
                    </p>
                    <a href="app-components.html" class="btn btn-primary">
                        <ion-icon name="cube-outline" role="img" class="md hydrated" aria-label="cube outline">
                        </ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>

        <div class="section mt-3 mb-3">
            <div class="card">
                <img src="{{ asset('siswa/assets/img/sample/photo/wide2.jpg') }}" class="card-img-top"
                    alt="image">
                <div class="card-body">
                    <h6 class="card-subtitle">Discover</h6>
                    <h5 class="card-title">Pages</h5>
                    <p class="card-text">
                        Mobilekit comes with basic pages you may need and use in your projects easily.
                    </p>
                    <a href="app-pages.html" class="btn btn-primary">
                        <ion-icon name="layers-outline" role="img" class="md hydrated"
                            aria-label="layers outline"></ion-icon>
                        Preview
                    </a>
                </div>
            </div>
        </div>


        <!-- app footer -->
        @include('layouts.siswa.partial.footer')
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->


    <!-- App Bottom Menu -->
    @include('layouts.siswa.partial.navbar')
    <!-- * App Bottom Menu -->

    <!-- App Sidebar -->
    @include('layouts.siswa.partial.sidebar')
    <!-- * App Sidebar -->

    {{-- <!-- welcome notification  -->
    <div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="{{asset('siswa/assets/img/icon/72x72.png"')}} alt="image" class="imaged w24">
                    <strong>Mobilekit</strong>
                    <span>just now</span>
                </div>
                <a href="index.html#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Mobilekit</h3>
                    <div class="text">
                        Mobilekit is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification --> --}}

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

    {{-- <script>
        setTimeout(() => {
            notification('notification-welcome', 5000);
        }, 2000);
    </script> --}}

</body>

</html>
