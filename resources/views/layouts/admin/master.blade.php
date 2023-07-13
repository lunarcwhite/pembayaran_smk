<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">

    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />

    <title>Blank Page | AdminKit Demo</title>
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar">
            @include('layouts.admin.partial.sidebar')
        </nav>

        <div class="main">
            @include('layouts.admin.partial.navbar')

            <main class="content">
                <div class="container-fluid p-0">

                    <h1 class="h3 mb-3">@yield('menuTitle')</h1>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">@yield('pageTitle')</h5>
                                </div>
                                <hr/>
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            @include('layouts.admin.partial.footer')
        </div>
    </div>
    <script src="{{asset('vendor/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>

    @include('layouts.scripts.sweetalert')
    @include('layouts.scripts.dataTable')
       <script>
        function clearInput(formId, label = "", action = "") {
            document.getElementById(formId).reset();
            $(".file").val("");
            $(`#labelModal`).text(label);
            $(`#btn-submit`).text('Simpan');
            document.getElementById(formId).action =
                `{{ url('${action}') }}`;
            $("#update").empty();
            $('.image-preview').empty();
            $(".gambar").empty();
            $(".kapilih").removeAttr('selected');
        }
    </script>
    @stack('js')
</body>

</html>
