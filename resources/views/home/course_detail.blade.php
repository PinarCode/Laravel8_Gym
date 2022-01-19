@extends('layouts.home')

@section('title',$data->title. ' Course List')
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span
                    class="breadcrumbs_item current">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</span>
                <span class="breadcrumbs_delimiter">{{$data->title}}</span>

            </div>
        </div>
        <div class="content_wrap">
            <h3 class="page_title">{{$data->title}}</h3><br>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <article class="post_item post_item_excerpt post_featured_left post">
                                <div class="post_featured bg_image">
                                    <div
                                        class="sc_slider sc_slider_swiper swiper-slider-container sc_slider_controls sc_slider_pagination"
                                        data-old-width="750" data-old-height="422" data-interval="8759">

                                        <div class="slides swiper-wrapper">
                                            <div class="swiper-slide">
                                                <a href="#">
                                                    <img alt="Depositphotos_25234873_original.jpg"
                                                         src="{{Storage::url($data->image)}}" style="height: 320px">
                                                </a>
                                            </div>
                                            @foreach($datalist as $rs)
                                                <div class="swiper-slide">
                                                    <a href="#">
                                                        <img alt="Depositphotos_25234873_original.jpg"
                                                             src="{{Storage::url($rs->image)}}" style="height: 320px">
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="sc_slider_controls_wrap">
                                            <a class="sc_slider_prev" href="#"> </a>
                                            <a class="sc_slider_next" href="#"> </a>
                                        </div>
                                        <div class="sc_slider_pagination_wrap"></div>
                                    </div>
                                </div>&nbsp;&nbsp;
                                <div class="post_date">{{$data->month}} months -> {{$data->price}}₺</div>
                                <div class="post_info">
                                    <div class="post_rating reviews_summary blog_reviews">
                                        <div class="criteria_summary criteria_row">
                                            <div class="reviews_stars reviews_style_stars">
                                                @php
                                                    $avgrev = \App\Http\Controllers\HomeController::avrgreview($data->id);
                                                    $countreview = \App\Http\Controllers\HomeController::countreview($data->id);
                                                @endphp

                                                <div class="reviews_stars_wrap">
                                                    @if ($avgrev>=1)
                                                        <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                    @else
                                                        <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                    @endif

                                                    @if ($avgrev>=2)
                                                        <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                    @else
                                                        <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                    @endif

                                                    @if ($avgrev>=3)
                                                        <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                    @else
                                                        <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                    @endif

                                                    @if ($avgrev>=4)
                                                        <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                    @else
                                                        <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                    @endif

                                                    @if ($avgrev>=5)
                                                        <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                    @else
                                                        <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                    @endif
                                                </div>
                                                <div class="reviews_value">{{$countreview}}
                                                        Review(s) {{$avgrev}} / Add Review</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3 class="post_title">
                                    <a href="#">
                                        <span class="post_icon icon-pitch"></span>
                                        <span class="post_title_text">{{$data->title}}</span>
                                    </a>
                                </h3>
                                <div class="post_content clearfix">
                                    <div class="post_descr">
                                        <p><b>{{$data->description}}</b></p>
                                    </div>
                                </div>
                            </article>
                            <div class="">
                                <div class="sc_section bg_tint_none">
                                    <div class="sc_line sc_line_style_solid"></div>
                                    <div class="sc_tabs sc_tabs_style_1" data-active="0">
                                        <ul class="sc_tabs_titles">
                                            <li class="sc_tabs_title first">
                                                <a href="#sc_tab_14_1" class="theme_button"
                                                   id="sc_tab_14_1_tab">DETAIL</a>
                                            </li>
                                            <li class="sc_tabs_title">
                                                <a href="#sc_tab_14_2" class="theme_button" id="sc_tab_14_2_tab">SIGN IN COURSE</a>
                                            </li>
                                            <li class="sc_tabs_title last">
                                                <a href="#sc_tab_14_3" class="theme_button" id="sc_tab_14_3_tab">REVIEWS
                                                    ({{ $countreview }})</a>
                                            </li>
                                        </ul>
                                        <div id="sc_tab_14_1" class="sc_tabs_content odd first">
                                            <p>{!! $data->detail !!}</p>
                                        </div>
                                        <div id="sc_tab_14_2" class="sc_tabs_content even">
                                            <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
                                                <div class="breadcrumbs">
                                                    <div class="content_wrap">
                                                        <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                                                        <span class="breadcrumbs_delimiter"></span>
                                                        <span class="breadcrumbs_item current">Order</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="page_content_wrap">
                                                <div class="content_wrap">
                                                    <div class="content">
                                                        <section class="no_padding">
                                                            <div class="container">
                                                                <div class="row">

                                                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                                                        <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                                            <form class="contact_1" action="{{route('buycourse',['id'=>$data->id])}}" method="post">
                                                                                @csrf
                                                                                <div class="sc_price_block sc_price_block_style_1">

                                                                                    <div class="sc_contact_form_info"><br>
                                                                                        <h6 class="sc_title sc_title_regular">&nbsp;&nbsp;&nbsp;<b>ORDER DETAILS</b></h6>
                                                                                        <div class="sc_line style_3 sc_line_style_double"> </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="text" name="name" value="{{ Auth::user()->name }}" placeholder="Name & Surname" id="contact_form_username" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="text" name="email" value="{{ Auth::user()->email }}" placeholder="E mail" id="contact_form_email" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="text" name="address" value="{{ Auth::user()->address }}" placeholder="Address" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="text" name="phone" value="{{ Auth::user()->phone }}" placeholder="Phone Number" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="date" name="startDate" value=" " placeholder="Start Date" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                        <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                            <input class="column-9_10" type="date" name="finishDate" value=" " placeholder="Finish Date" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                        </div><br>
                                                                                    </div>
                                                                                </div>
                                                                                <div>
                                                                                    &nbsp;&nbsp;&nbsp;<button type="submit" class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_small">Complete Payment Process</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                        <div class="column-1_2 sc_column_item sc_column_item_2 even">
                                                                            <div class="sc_price_block sc_price_block_style_2 marked">
                                                                                <div class="sc_contact_form_info"><br>
                                                                                    <h6 class="sc_title sc_title_regular">&nbsp;&nbsp;&nbsp;<b>PAYMENT DETAILS </b></h6>
                                                                                    <div class="sc_line style_3 sc_line_style_double"> </div><br>
                                                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                        <input class="column-9_10" type="text" name="cardname" placeholder="Card Name & Surname" value="{{ Auth::user()->name }}" id="contact_form_username" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                    </div><br>
                                                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                        <input class="column-9_10" type="number" name="cardnumber" placeholder="Card Number" id="contact_form_email" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                    </div><br>
                                                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                        <input class="column-9_10" type="text" name="dates" placeholder="Valid Dates mm/yy" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                    </div><br>
                                                                                    <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                        <input class="column-9_10" type="text" name="key" placeholder="Secret number" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                                                    </div><br>
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
                                        </div>
                                        <div id="sc_tab_14_3" class="sc_tabs_content odd">
                                            <section class="no_padding content_wrap">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="comments_wrap">
                                                            @foreach($reviews as $rs)
                                                                <div id="comments" class="comments_list_wrap">
                                                                    <div class="comments_list">
                                                                        <div class="comment even thread-even depth-1 comment_item">
                                                                            <div class="comment_content">
                                                                                <div class="comment_info">
                                                                                    <span
                                                                                        class="comment_author">{{$rs->name}}</span>
                                                                                    <span class="comment_date">
                                                                                    <span
                                                                                        class="comment_date_value">{{$rs->created_at}}</span>
                                                                                </span>
                                                                                    <div class="reviews_stars_wrap">
                                                                                        @if ($rs->rate>=1)
                                                                                            <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                                                        @else
                                                                                            <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                                                        @endif

                                                                                        @if ($rs->rate>=2)
                                                                                            <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                                                        @else
                                                                                            <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                                                        @endif

                                                                                        @if ($rs->rate>=3)
                                                                                                <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                                                            @else
                                                                                                <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                                                        @endif

                                                                                        @if ($rs->rate>=4)
                                                                                                <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                                                            @else
                                                                                                <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                                                        @endif

                                                                                        @if ($rs->rate>=5)
                                                                                                <i class="reviews_stars_hover"><span class="reviews_star"></span></i>
                                                                                            @else
                                                                                                <i class="reviews_stars_bg"><span class="reviews_star"></span></i>
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                                <div class="comment_text_wrap">
                                                                                    <div class="comment_text">
                                                                                        <strong>{{$rs->subject}}</strong>
                                                                                        <p>{{$rs->review}}</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="comments_pagination">
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                            <div class="comments_form_wrap">
                                                                <h4 class="section_title comments_form_title">Write Your
                                                                    Review</h4>
                                                                <div class="comments_form">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 id="reply-title"
                                                                            class="comment-reply-title">
                                                                            <small>
                                                                                <a rel="nofollow"
                                                                                   id="cancel-comment-reply-link"
                                                                                   href="#respond">Cancel reply</a>
                                                                            </small>
                                                                        </h3>
                                                                        @livewire('review',['id'=>$data->id])
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
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
