
@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="#">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">User Profile</span>
            </div>
        </div>
    </div>
    <div class="page_content_wrap" >
        <div class="content">
            <section class="content_wrap">
                <div class="container">
                    <div class="row">
                        <div class="page_content_wrap">
                            <div class="content_wrap">
                                <div class="sidebar widget_area bg_tint_light sidebar_style_light">
                                    @include('home.usermenu')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

