@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $setting->title)
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
                <span class="breadcrumbs_item current">Our Tainers &#038; Instructors</span>
            </div>
        </div>
        <div class="content_wrap">
            <h5 class="page_title">Başlık</h5>
        </div>
    </div>
    <div class="post_content">

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="sc_content content_wrap">
                        <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3 trainers_3">
                            içerik
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
