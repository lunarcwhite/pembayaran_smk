<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Login | Graindashboard UI Kit</title>

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

        <div class="content">

            <div class="container-fluid pb-5">

                <div class="row justify-content-md-center">
                    <div class="card-wrapper col-12 col-md-4 mt-5 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Login</h4>
                                <form method="POST" action="{{ url('authenticate') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="email">E-Mail Address / Username</label>
                                        <input id="email" placeholder="Username" type="username" class="form-control" name="username"
                                            required="" autofocus="">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password
                                        </label>
                                        <input id="password" type="password" placeholder="Password" class="form-control" name="password"
                                            required="">
                                        <div class="text-right">
                                            <a href="password-reset.html" class="small">
                                                Forgot Your Password?
                                            </a>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-check position-relative mb-2">
                                            <input type="checkbox" class="form-check-input d-none" id="remember"
                                                name="remember">
                                            <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember"
                                                data-icon="&#xe936">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group no-margin">
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Sign In
                                        </button>
                                    </div>
                                    <div class="text-center mt-3 small">
                                        Don't have an account? <a href="register.html">Sign Up</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <footer>
                            <div class="container-fluid">
                                <div class="footer-content text-center small">
                                    <span class="text-muted">&copy; 2019 Graindashboard. <br/> All Rights Reserved.</span>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script src="{{asset('vendor/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @include('layouts.scripts.sweetalert')
</body>

</html>
