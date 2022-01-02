@extends('layouts.home')

@section('title', 'Video Training')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Video Training</span>
            </div>
        </div>
        <div class="content_wrap">
            <h5 class="page_title">Video Training</h5>
        </div><br>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div class="">
                                <div class="sc_section bg_tint_none">
                                    <div class="sc_video_player">
                                        <div class="sc_video_frame" data-width="519" data-height="292">
                                            <iframe class="video_frame" src="https://player.vimeo.com/video/107971310" width="519" height="292" frameborder="0" webkitAllowFullScreen="webkitAllowFullScreen" mozallowfullscreen="mozallowfullscreen" allowFullScreen="allowFullScreen">
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>

@endsection
