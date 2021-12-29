@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">My Account</span>
            </div>
        </div>
        <div class="content_wrap">
            <h1 class="page_title">@include('home.usermenu')</h1>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <article class="post_item post_item_excerpt post_format_standard post">
                                @include('profile.show')
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
