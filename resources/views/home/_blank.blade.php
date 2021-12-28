@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('home')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Daily Events</span>
            </div>
        </div>
        <div class="content_wrap">
            <h1 class="page_title">Daily Events</h1>
        </div>
    </div>
    <div class="page_content_wrap" >
        <div class="content">
            <section class="content_wrap">
                <div class="container">
                    <div class="row">
                        İçerik alanı
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection
