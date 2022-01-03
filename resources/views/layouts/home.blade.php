<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/images/favicon.ico"/>
    <title> @yield('title') </title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="John Doe">
    <link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/swiper/idangerous.swiper.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/revslider/rs-plugin/css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/fontello/css/fontello.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/shortcodes.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/core.animation.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/skin.css' type='text/css' media='all'/>
    <style id='themerex-custom-style-inline-css' type='text/css'></style>
    <link rel='stylesheet' href='{{ asset('assets') }}/css/responsive.css' type='text/css' media='all'/>

    <!--<link rel='stylesheet' href='custom_tools/css/front.customizer.css' type='text/css' media='all'/>-->
    @yield('css')
    @yield('headerjs')
</head>
<body class="home page body_style_fullscreen article_style_boxed top_panel_style_dark top_panel_opacity_transparent top_panel_over menu_right sidebar_hide">
    <div class="body_wrap">
        <div class="page_wrap">
            <div class="top_panel_fixed_wrap"></div>
                @include('home._header')
                <div class="page_content_wrap" >
                    <div class="content">
                        <article class="post_item post_item_single post_format_standard page">
                            <div class="post_content">
                                @section('content')
                                @show
                            </div>
                        </article>
                    </div>
                </div>

                @include('home._footer')
                @yield('footerjs')
        </div>
            <a href="#" class="scroll_to_top icon-up-dir" title="Scroll to top"></a>

            <div class="preloader">
                <div class="preloader_image"></div>
            </div>
    </div>
</body>
</html>
