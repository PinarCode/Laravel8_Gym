@extends('layouts.home')

@section('title', $search.' Course List')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <a class="breadcrumbs_item home" href="{{$search}}">Course List</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title)}}</span>
            </div>
        </div>
        <div class="content_wrap">
            <h3 class="page_title">Course</h3><br>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                @foreach($datalist as $rs)
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                                <div class="post_thumb" data-image="images/1169x617.png" data-title="Martial Arts" align="center">
                                    <img alt="Martial Arts" src="{{Storage::url($rs->image)}}">
                                </div>
                                <div class="post_thumb_hover">
                                    <h2 class="post_title entry-title">{{$rs->title}}</h2>
                                </div>
                        </div>
                    </div>
                </section>

                <section class="no_padding content_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="sc_section bg_tint_none">
                                <div class="sc_content content_wrap">
                                    <div class="sc_section bg_tint_none">
                                        <h2 class="sc_title style_3">GET STRESS RESISTANT AND FIT</h2>
                                        <h5 class="sc_undertitle style_3">{{$rs->title}}</h5>
                                    </div>
                                    <div class="sc_reviews alignright">
                                        <div class="reviews_block no_margin">
                                            <div id="users_marks" class="sc_tabs_content">
                                                <div class="reviews_accept">
                                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small">Accept your votes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>{!! $rs->detail !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="no_padding content_wrap">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('course',['id'=>$rs->id])}}" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small margin_top_small">JOIN THE COURSE</a>
                            <div class="sc_line sc_line_style_solid margin_bottom_none"></div>
                        </div>
                    </div>
                </section>
                @endforeach
            </div>
        </div>
    </div>
    <br>

@endsection
