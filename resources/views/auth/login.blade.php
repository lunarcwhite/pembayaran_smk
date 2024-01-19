<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Login | Pembayaran SMK</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('grains-master/public/img/favicon.ico')}}">

    <!-- Template -->
    <link rel="stylesheet" href="{{ asset('admin/css/app.css') }}">
</head>

<body class="">

    <main class="main">
                    <div class="bg-warning vh-100 w-50">
                        <div class="row">
                            <div style="width: 100px; height: 100px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" fill="white">
                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"/>
                                </svg>

                            </div>
                            <div>
                                <h1>SMKS</h1>
                                <h2>Bunga Persada Cianjur</h2>
                            </div>
                        </div>

                        {{-- <div class="ml-0 pl-0 col-12 col-md-8 col-sm-12" style="margin-top:20%"> --}}
                            <div class="vw-50">
                                {{-- <div class="card-body"> --}}
                                    {{-- <h4 class="card-title">Login</h4> --}}
                                    <form method="POST" action="{{ url('authenticate') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input id="email" placeholder="Username" type="username" class="form-control" name="username"
                                                required="" autofocus="">
                                        </div>

                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                                                required="">
                                        </div>

                                        <div class="form-group no-margin p-0 m-0 col-3">
                                            <button type="submit" class="btn btn-primary btn-block">
                                                Login
                                            </button>
                                        </div>
                                        {{-- <div class="text-center mt-3 small">
                                            Don't have an account? <a href="register.html">Sign Up</a>
                                        </div> --}}
                                    </form>
                                {{-- </div> --}}
                            </div>
                        {{-- </div> --}}
                    </div>
        {{-- <div class="content"> --}}

            {{-- <div class="container-fluid pb-5 h-100"> --}}

                {{-- <div class="row bg-warning"> --}}
                    {{-- asalnya disini --}}


                {{-- </div> --}}
            {{-- </div> --}}

        {{-- </div> --}}
    </main>
    <script src="{{asset('vendor/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @include('layouts.scripts.sweetalert')
</body>

</html>
