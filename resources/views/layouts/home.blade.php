<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LOVEFIT - Video Fitness Workout">
    <meta name="author" content="Ansonika">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Pınar Kaya">
    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{ asset('assets') }}/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ asset('assets') }}/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ asset('assets') }}/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ asset('assets') }}/img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700|Kalam:400,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{ asset('assets') }}/css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/menu.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/responsive.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/css/magnific-popup.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet">

    <!-- Modernizr -->
    <script src="{{ asset('assets') }}/js/modernizr.js"></script>
    @yield('css')
    @yield('headerjs')
</head>

<body>

@include("home._header")
@section('content')
    İçerik Alanı
@show
@include('home._login')
@include('home._register')
@include('home._search')
@include("home._footer")

<!-- COMMON SCRIPTS -->
<script src="{{ asset('assets') }}/js/jquery-2.2.4.min.js"></script>
<script src="{{ asset('assets') }}/js/common_scripts_min.js"></script>
<script src="{{ asset('assets') }}/assets/validate.js"></script>
<script src="{{ asset('assets') }}/js/functions.js"></script>

<!-- SPECIFIC SCRIPTS -->
<script src="{{ asset('assets') }}/js/bootstrap-portfilter.min.js"></script>
<script src="{{ asset('assets') }}/js/video_header.js"></script>
<script>
    HeaderVideo.init({
        container: $('.header-video'),
        header: $('.header-video--media'),
        videoTrigger: $("#video-trigger"),
        autoPlayVideo: true
    });
</script>
@yield('footerjs')
</body>
</html>
