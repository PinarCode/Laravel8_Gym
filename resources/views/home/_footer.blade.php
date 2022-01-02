@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<footer class="footer_wrap bg_tint_light footer_style_light widget_area">
    <div class="content_wrap">
        <div class="columns_wrap">
            <aside class="column-1_4 widget widget_recent_comments">
                <h5 class="widget_title">Recent Comments</h5>
                <ul id="recentcomments">
                    <li class="recentcomments">
                        <span class="comment-author-link">AXIOM_admin</span> on <a href="#">Martial Arts Course</a>
                    </li>
                    <li class="recentcomments">
                        <span class="comment-author-link">AXIOM_admin</span> on <a href="#">John Snow</a>
                    </li>
                    <li class="recentcomments">
                        <span class="comment-author-link">AXIOM_admin</span> on <a href="#">Martial Arts</a>
                    </li>
                </ul>
            </aside>
            <aside class="column-1_4 widget widget_recent_entries">
                <h5 class="widget_title">Recent Posts</h5>
                <ul>
                    <li>
                        <a href="#">Metabolism Boosting Workout</a>
                    </li>
                    <li>
                        <a href="#">5 Benefits of Interval Training</a>
                    </li>
                    <li>
                        <a href="#">The Power of Yoga</a>
                    </li>
                </ul>
            </aside>
            <aside class="column-1_4 widget widget_recent_reviews">
                <h5 class="widget_title">Recent Review</h5>
                <div class="recent_reviews">
                    <article class="post_item no_thumb first">
                        <div class="post_content">
                            <h6 class="post_title">
                                <a href="#">Metabolism Boosting Workout</a>
                            </h6>
                        </div>
                    </article>
                    <article class="post_item no_thumb">
                        <div class="post_content">
                            <h6 class="post_title">
                                <a href="#">The Secret to Stronger Muscles</a>
                            </h6>
                        </div>
                    </article>
                    <article class="post_item no_thumb">
                        <div class="post_content">
                            <h6 class="post_title">
                                <a href="#">Video Post Format</a>
                            </h6>
                        </div>
                    </article>
                </div>
            </aside>
            <aside class="column-1_4 widget widget_flickr">
                <h5 class="widget_title">Flickr Photo</h5>
                <div class="flickr_images">
                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=random&amp;flickr_display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=52617155%40N08">
                    </script>
                </div>
            </aside>
        </div>
    </div>
</footer>

<div class="copyright_wrap">
    <div class="content_wrap with_menu">
        <div class="menu_foot_wrapper">
            <div class="menu">
                <ul id="menu_foot" class="menu_foot_nav">
                    <li class="menu-item">
                        <a href="#">
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <span>Trainers</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <span>Features</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <span>Categories</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('aboutus')}}">
                            <span>About</span>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="#">
                            <span>Contact Us</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="social">
                <div class="sc_socials sc_socials_size_small">
                    @if($setting->facebook != null)
                    <div class="sc_socials_item">
                        <a href="{{$setting->facebook}}" target="_blank" class="social_icons social_facebook icons">
                            <span class="icon-facebook"> </span>
                        </a>
                    </div>
                    @endif
                    @if($setting->twitter != null)
                    <div class="sc_socials_item">
                        <a href="{{$setting->twitter}}" target="_blank" class="social_icons social_twitter icons">
                            <span class="icon-twitter"> </span>
                        </a>
                    </div>
                    @endif
                    @if($setting->instagram != null)
                    <div class="sc_socials_item">
                        <a href="{{$setting->instagram}}" target="_blank" class="social_icons social_instagram icons">
                            <span class="icon-instagram-2"></span>
                        </a>
                    </div>
                    @endif
                    @if($setting->youtube != null)
                    <div class="sc_socials_item">
                        <a href="{{$setting->youtube}}" target="_blank" class="social_icons social_youtube icons">
                            <span class="icon-youtube"> </span>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="copyright_text">
            <p>
                <span><a href="#">{{$setting->company}}</a> © 2015 ALL RIGHTS RESERVED</span>
            </p>
            <p>
                <span class="sc_highlight">The most profitable investment is the one you’re making to your own health. Do not miss your chance to get stronger, healthier and younger, and get lots of fun, good cheer and tons of positive energy! Sign up to the Gym and build yourself!</span>
            </p>
        </div>
    </div>
</div>
</div>




<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/jquery-1.11.3.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/jquery-migrate.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/revslider/rs-plugin/js/jquery.themepunch.tools.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>

<script type='text/javascript' src='{{ asset('assets') }}/js/custom/_main.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/custom/_form_contact.js'></script>

<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/superfish.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/jquery.slidemenu.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/custom/core.utils.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/custom/core.init.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/custom/shortcodes.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/jquery.isotope.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/swiper/idangerous.swiper-2.7.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/swiper/idangerous.swiper.scrollbar-2.4.js'></script>

<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/mediaelement/mediaelement-and-player.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/core.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/widget.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/accordion.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/custom/core.googlemap.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/tabs.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/effect.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/effect-fade.min.js'></script>
<script type='text/javascript' src='{{ asset('assets') }}/js/vendor/diagram/chart.min.js'></script>

<!--<script type='text/javascript' src='custom_tools/js/skin.customizer.js'></script>-->
<!--<script type='text/javascript' src='custom_tools/js/front.customizer.js'></script>-->
