@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<header class="top_panel_wrap bg_tint_dark bg_type_image menu_bg_color_1">
    <div class="menu_main_wrap logo_left">
        <div class="content_wrap clearfix">
            <div class="logo">
						<span class="logo_shape">
							<a href="{{route('homepage')}}">
								<img src="{{ asset('assets') }}/images/131x70.png" class="logo_main" alt="">
								<img src="{{ asset('assets') }}/images/131x70.png" class="logo_fixed" alt="">
								<span class="logo_slogan"> </span>
							</a>
						</span>
            </div>
            <div class="search_wrap search_style_regular" title="Open/close search form">
                <a href="#" class="search_icon icon-search-1"> </a>
                <div class="search_form_wrap">
                    <form role="search" method="get" class="search_form" action="#">
                        <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>
                        <input type="text" class="search_field" placeholder="" value="" name="s" title=""/>
                    </form>
                </div>
                <div class="search_results widget_area bg_tint_light">
                    <a class="search_results_close icon-cancel-1"> </a>
                    <div class="search_results_content"></div>
                </div>
            </div>
            <a href="#" class="menu_main_responsive_button icon-menu-1"> </a>
            <nav role="navigation" class="menu_main_nav_area menu_color_bg_2">
                <ul id="menu_main" class="menu_main_nav">
                    <li class="menu-item current-menu-ancestor menu-item-has-children">
                        <a href="{{route('homepage')}}">
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">
                            <span>Features</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="features-about-us.html">
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="features-contact-us.html">
                                    <span>Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="classes.html"><span>Categories</span></a>
                        <ul class="sub-menu">
                            @foreach($parentCategories as $rs)
                            <li class="menu-item menu-item-has-children">
                                <a href="#"><span>{{$rs->title}}</span></a>
                                @if(count($rs->children))
                                    @include('home.categorytree',['children' => $rs->children])
                                @endif
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="trainers-team-members.html">
                            <span>Trainers</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="trainers-team-members.html">
                                    <span>Trainers Team</span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="trainers-trainer-personal-page.html">
                                    <span>Trainer&#8217;s Personal Page</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="blog.html">
                            <span>Blog</span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children">
                                <a href="#">
                                    <span>Post Formats</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-with-sidebar.html">
                                            <span>With Sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-without-sidebar.html">
                                            <span>Without sidebar</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-full-width.html">
                                            <span>Full Width</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a href="#">
                                    <span>Masonry tiles</span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item">
                                        <a href="blog-masonry-masonry-2-columns.html">
                                            <span>Masonry (2 columns)</span>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="blog-masonry-masonry-3-columns.html">
                                            <span>Masonry (3 columns)</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{route('admin_login')}}">
                            <img src="{{ asset('assets') }}/images/user-xl.png" style="height: 30px">
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="#">
                            <img src="{{ asset('assets') }}/images/cart-36-xl.png" style="height: 30px">
                        </a>
                    </li>
                    <li id="blob">
								<span>
									<span></span>
								</span>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
