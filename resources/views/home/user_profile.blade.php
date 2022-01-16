@extends('layouts.home')

@section('title', 'User Profile')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">My Account</span>
            </div>
        </div>
        <div class="content_wrap">
            @include('home.usermenu')
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            @include('profile.show')
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
