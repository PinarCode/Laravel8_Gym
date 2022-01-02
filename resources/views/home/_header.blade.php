@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<header class="top_panel_wrap bg_tint_dark bg_type_image menu_bg_color_1">
    <div class="menu_main_wrap logo_left menu_show">
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
                    <form class="search_form" action="{{route('getcourse')}}"  method="post">
                        @csrf
                        <button type="submit" class="search_submit icon-zoom-1"></button>
                        @livewire('search')
                    </form>
                    @livewireScripts
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
                        <a href="{{route('aboutus')}}">
                            <span>Aboutus</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children" >
                        <a href="classes.html"><span>Categories</span></a>
                        <ul class="sub-menu">
                            @foreach($parentCategories as $rs)
                                <li class="menu-item menu-item-has-children">
                                    <a href="{{route('categorycourses',['id'=>$rs->id])}}"><span>{{$rs->title}}</span></a>
                                    @if(count($rs->children))
                                        @include('home.categorytree',['children' => $rs->children])
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{route('references')}}">
                            <span>References</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{route('fag')}}">
                            <span>FAQ</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        <a href="{{route('contact')}}">
                            <span>Contact</span>
                        </a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                        @auth
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                               data-bs-toggle="dropdown"><i class="icon-user-1"></i> &nbsp;{{Auth::user()->name}}</a>
                        @endauth
                        @guest
                            <div><a href="/login" class="text-uppercase">LOGIN</a>&nbsp; / &nbsp;<a href="/register" class="text-uppercase">JOIN</a>
                            </div>
                        @endguest

                        <ul class="dropdown-menu">
                            <li><a href="{{route('myprofile')}}"><i class="icon-user"></i> My Account</a></li>
                            <li><a href="#"> <i class="icon-heart-2"></i> My WishList</a></li>
                            <li><a href="#"> <i class="icon-comment"></i> My Review</a></li>
                            <li><a href="#"><i class="icon-file73"></i> Compare</a></li>
                            <li><a href="#"> <i class="icon-check-2"></i> Checkout</a></li>
                            <li><a href="{{route('logout')}}"><i class="revicon-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li id="blob"><span><span></span></span></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
