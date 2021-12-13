<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/admin/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('assets') }}/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    @yield('css')
    @yield('javascript')
</head>
<body>
    <!--*******************
            Preloader start
        ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->
    <div id="main-wrapper">
    @include('admin._header')
    @include('admin._sidebar')
    @yield('content')
    @include('admin._footer')
    @yield('footer')
</body>
</html>
