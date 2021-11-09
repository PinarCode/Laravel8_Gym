<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Spor Salonu</title>
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- ** Plugins Needed for the Project ** -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/bootstrap/bootstrap.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/slick/slick.css">
    <!-- themefy-icon -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/themify-icons/themify-icons.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/animate/animate.css">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/aos/aos.css">
    <!-- venobox popup -->
    <link rel="stylesheet" href="{{ asset('assets')}}/plugins/venobox/venobox.css">

    <!-- Main Stylesheet -->
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

</head>

<body>
@include('home._header')
@include('home._footer')
</body>
</html>

