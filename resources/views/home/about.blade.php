@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', 'About Us - '. $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">About Us</span>
            </div>
        </div>
        <div class="content_wrap">
            <h5 class="page_title">ABOUT US</h5><br>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <article class="post_item post_item_excerpt post_format_standard post">
                                {!! $setting->aboutus !!}
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>

@endsection
