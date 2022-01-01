@extends('layouts.home')

@section('title', $data->title.' Course List')
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
                <a class="breadcrumbs_item home" href="#">Course List</a>
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
                            <div class="post_featured bg_tint_dark">
                                <div class="post_thumb" data-image="images/1169x617.png" data-title="Martial Arts">
                                    <img alt="Martial Arts" src="{{Storage::url($rs->image)}}">
                                </div>
                                <div class="post_thumb_hover">
                                    <div class="post_icon icon-pitch">
                                    </div>
                                    <h1 class="post_title entry-title">{{$rs->title}}</h1>
                                    <div class="post_button">
                                        <a href="{{route('course',['id'=>$rs->id])}}" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_medium">VIEW COURSE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endforeach
                <section class="no_padding content_wrap">
                    <div class="container">
                        <div class="row">
                            <div class="sc_section bg_tint_none">
                                <div class="sc_content content_wrap">
                                    <div class="sc_section bg_tint_none">
                                        <h2 class="sc_title style_3">GET STRESS RESISTANT AND FIT</h2>
                                        <h5 class="sc_undertitle style_3">Aiki Ju Jitsu, San Shou Kuan, Judo, Karate etc</h5>
                                    </div>
                                    <div class="sc_reviews alignright">
                                        <div class="reviews_block no_margin">
                                            <div id="users_marks" class="sc_tabs_content">
                                                <div class="reviews_editor">
                                                    <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                        <div class="reviews_criteria">Tutorials</div>
                                                        <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="63">
                                                            <div class="reviews_stars_wrap">
                                                                <div class="reviews_stars_bg"> </div>
                                                                <div class="reviews_stars_hover"> </div>
                                                                <div class="reviews_slider"> </div>
                                                            </div>
                                                            <div class="reviews_value">63</div>
                                                            <input type="hidden" name="reviews_marks[]" value="63"/>
                                                        </div>
                                                    </div>
                                                    <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                        <div class="reviews_criteria">Training programm</div>
                                                        <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="72">
                                                            <div class="reviews_stars_wrap">
                                                                <div class="reviews_stars_bg"> </div>
                                                                <div class="reviews_stars_hover"> </div>
                                                                <div class="reviews_slider"> </div>
                                                            </div>
                                                            <div class="reviews_value">72</div>
                                                            <input type="hidden" name="reviews_marks[]" value="72"/>
                                                        </div>
                                                    </div>
                                                    <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                        <div class="reviews_criteria">Teacher</div>
                                                        <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="56">
                                                            <div class="reviews_stars_wrap">
                                                                <div class="reviews_stars_bg"> </div>
                                                                <div class="reviews_stars_hover"> </div>
                                                                <div class="reviews_slider"> </div>
                                                            </div>
                                                            <div class="reviews_value">56</div>
                                                            <input type="hidden" name="reviews_marks[]" value="56"/>
                                                        </div>
                                                    </div>
                                                    <div class="reviews_item reviews_max_level_100" data-max-level="100" data-step="1">
                                                        <div class="reviews_criteria">Price</div>
                                                        <div class="reviews_stars reviews_style_stars reviews_editable" data-mark="53">
                                                            <div class="reviews_stars_wrap">
                                                                <div class="reviews_stars_bg"> </div>
                                                                <div class="reviews_stars_hover"> </div>
                                                                <div class="reviews_slider"> </div>
                                                            </div>
                                                            <div class="reviews_value">53</div>
                                                            <input type="hidden" name="reviews_marks[]" value="53"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="reviews_accept">
                                                    <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small">Accept your votes</a>
                                                </div>
                                                <div class="reviews_summary">
                                                    <div class="reviews_item reviews_max_level_100" data-step="1">
                                                        <div class="reviews_criteria">Summary rating from <b>34</b> user's marks. You can set own marks for this article - just click on stars above and press "Accept".</div>
                                                        <div class="reviews_stars reviews_style_stars" data-mark="61">
                                                            <div class="reviews_stars_wrap">
                                                                <div class="reviews_stars_bg"> </div>
                                                                <div class="reviews_stars_hover"> </div>
                                                            </div>
                                                            <div class="reviews_value">61</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>You’re already well aware that incorporating intervals into your training gives you the most bang for your workout-buck. High-intensity interval training, or HIIT—alternating between powerful, limit-pushing bursts and slowed-down recovery periods—has been shown to rev your calorie burn, boost fat reduction, increase strength and muscle mass and more. And, for those training for a race, intervals may help you improve your time even as you cut the time dedicated to training in half, according to a Danish study that tracked 5K times as affected by HIIT over a seven-week period.</p>
                                    <p>But as praise for HIIT has reached cultish levels, the real, significant benefits of its counterpart, low-intensity steady-state cardio (or LISS, working at a lower intensity, but maintaining it for extended periods), have increasingly been swept under the rug. With the emphasis on intensity, most exercisers are overlooking the necessity (and benefits) of going easy and instead spending all of their time in this HIIT zone. Is it time to stop dissing LISS?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="no_padding content_wrap">
                    <div class="container">
                        <div class="row">
                            <a href="#" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small margin_top_small">JOIN THE COURSE</a>
                            <div class="sc_line sc_line_style_solid margin_bottom_none"></div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>
    <br>

@endsection
