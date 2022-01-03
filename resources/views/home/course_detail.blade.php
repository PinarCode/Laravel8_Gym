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
                                            <div class="reviews_stars reviews_style_stars" data-mark="92">
                                                <div class="reviews_stars_wrap">
                                                    <div class="reviews_stars_bg">
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                    </div>
                                                    <div class="reviews_stars_hover">
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                        <span class="reviews_star"></span>
                                                    </div>
                                                </div>
                                                <div class="reviews_value">92</div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="post_info_item post_info_counters">
											<a class="post_counters_item post_counters_views icon-eye-1"
                                               title="Views - 262" href="#">262</a>
											<a class="post_counters_item post_counters_comments icon-comment"
                                               title="Comments - 0" href="#">
												<span class="post_counters_number">0</span>
											</a>
											<a class="post_counters_item post_counters_likes icon-heart-1 enabled"
                                               title="Like" href="#" data-postid="38" data-likes="0"
                                               data-title-like="Like" data-title-dislike="Dislike">
												<span class="post_counters_number">0</span>
											</a>
										</span>
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
                                        <a href="{{route('buytocourse',['id'=>$rs->id])}}"
                                           class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_small">SIGN
                                            IN COURSE</a>
                                    </div>
                                </div>
                            </article>
                            <div class="">
                                <div class="sc_section bg_tint_none">
                                    <div class="sc_line sc_line_style_solid"></div>
                                    <div class="sc_tabs sc_tabs_style_1" data-active="0">
                                        <ul class="sc_tabs_titles">
                                            <li class="sc_tabs_title first">
                                                <a href="#sc_tab_14_1" class="theme_button" id="sc_tab_14_1_tab">DETAIL</a>
                                            </li>
                                            <li class="sc_tabs_title">
                                                <a href="#sc_tab_14_2" class="theme_button" id="sc_tab_14_2_tab">DESCRIPTION</a>
                                            </li>
                                            <li class="sc_tabs_title last">
                                                <a href="#sc_tab_14_3" class="theme_button" id="sc_tab_14_3_tab">REVIEW</a>
                                            </li>
                                        </ul>
                                        <div id="sc_tab_14_1" class="sc_tabs_content odd first">
                                            <p>{!! $data->detail !!}</p>
                                        </div>
                                        <div id="sc_tab_14_2" class="sc_tabs_content even">
                                            <p>{!! $data->description !!}</p>
                                        </div>
                                        <div id="sc_tab_14_3" class="sc_tabs_content odd">
                                            <section class="no_padding content_wrap">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="comments_wrap">
                                                            <div id="comments" class="comments_list_wrap">
                                                                <h3 class="section_title comments_list_title">1 Comment</h3>
                                                                <ul class="comments_list">
                                                                    <li class="comment even thread-even depth-1 comment_item">
                                                                        <div class="comment_author_avatar">
                                                                            <img alt='' src='{{ asset('assets') }}/images/75x75.png' srcset='{{ asset('assets') }}/images/75x75.png' class='avatar avatar-75 photo'/>
                                                                        </div>
                                                                        <div class="comment_content">
                                                                            <div class="comment_info">
                                                                                <span class="comment_author">AXIOM_admin</span>
                                                                                <span class="comment_date">
                                                                                    <span class="comment_date_label">Posted</span>
                                                                                    <span class="comment_date_value">February 10, 2015</span>
                                                                                </span>
                                                                                <span class="comment_time">1:17 pm</span>
                                                                            </div>
                                                                            <div class="comment_text_wrap">
                                                                                <div class="comment_text">
                                                                                    <p>John is a wonderful teacher. His
                                                                                        lessons are always interesting
                                                                                        and informative. I am happy to
                                                                                        attend his lectures.</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comment_reply">
                                                                                <a class='comment-reply-link' href='#respond' onclick='return addComment.moveForm( "comment-7", "7", "respond", "553" )'
                                                                                   aria-label='Reply to AXIOM_admin'>Reply</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="comments_pagination">
                                                                </div>
                                                            </div>
                                                            <div class="comments_form_wrap">
                                                                <h3 class="section_title comments_form_title">Add Comment</h3>
                                                                <div class="comments_form">
                                                                    <div id="respond" class="comment-respond">
                                                                        <h3 id="reply-title" class="comment-reply-title">
                                                                            <small>
                                                                                <a rel="nofollow" id="cancel-comment-reply-link" href="#respond">Cancel reply</a>
                                                                            </small>
                                                                        </h3>
                                                                        <form action="http://gym.axiomthemes.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                                            <p class="comments_notes">Your email address
                                                                                will not be published. Required fields
                                                                                are marked *</p>
                                                                            <div class="columns_wrap">
                                                                                <div class="comments_field comments_site column-1_1">
                                                                                    <label for="url" class="optional">Subject</label>
                                                                                    <input id="url" name="url" type="text" placeholder="Subject" value="" size="30" aria-required="true"/>
                                                                                </div>
                                                                            </div>
                                                                            <div class="comments_field comments_message">
                                                                                <label for="comment" class="required">Your Review</label>
                                                                                <textarea id="comment" name="comment" placeholder="Your Review" aria-required="true"></textarea>
                                                                            </div>
                                                                            <p class="form-submit">
                                                                                <input name="submit" type="submit" id="send_comment" class="submit" value="Post Review"/>
                                                                                <input type='hidden' name='comment_post_ID' value='553' id='comment_post_ID'/>
                                                                                <input type='hidden' name='comment_parent' id='comment_parent' value='0'/>
                                                                            </p>
                                                                        </form>
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
