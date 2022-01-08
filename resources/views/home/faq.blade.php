@extends('layouts.home')

@section('title', 'Frequently Asked Question')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Frequently Asked Question</span>
            </div>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div id="sc_tab_faq" class="sc_tabs_content even">
                                <div class="sc_content content_wrap margin_top_middle">
                                    <h3 class="sc_title style_1">FREQUENTLY ASKED QUESTIONS</h3>
                                    <h6 class="sc_undertitle style_3 aligncenter">General</h6>
                                    <div class="sc_accordion sc_accordion_style_2" data-active="0">
                                        @foreach($datalist as $rs)
                                        <div class="sc_accordion_item odd first">
                                            <h5 class="sc_accordion_title">
                                                <span class="sc_accordion_icon sc_accordion_icon_closed icon-plus-1"> </span>
                                                <span class="sc_accordion_icon sc_accordion_icon_opened icon-minus-1"> </span>
                                                {{$rs->question}}
                                            </h5>
                                            <div class="sc_accordion_content">
                                                <div class="">
                                                    <p>{!! $rs->answer !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
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
