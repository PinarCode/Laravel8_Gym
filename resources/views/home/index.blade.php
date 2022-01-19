@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    @include('home._slider')
    <section class="grey_section">
        <div class="container">
            <div class="row">
                <div class="sc_section bg_tint_none">
                    <div class="sc_content content_wrap">
                        <div class="sc_blogger layout_courses_3 template_portfolio sc_blogger_horizontal">
                            <div class="isotope_wrap" data-columns="3">
                                <div class="isotope_item isotope_item_courses isotope_item_courses_3 isotope_column_3">
                                    <div
                                        class="post_item post_item_courses post_item_courses_3post_format_standard odd">
                                        <div
                                            class="post_content isotope_item_content ih-item colored square effect_gym left_to_right">
                                            <div class="post_featured img">
                                                <h4 class="post_title">
                                                    <a href="#">Martial Arts</a>
                                                </h4>
                                                <div class="post_descr">
                                                    <div class="post_excerpt">Judo, Karate, Olympic Freestyle Wrestling
                                                        and Thai Box are amongst the list of our classes
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <img alt="Martial Arts"
                                                         src="{{ asset('assets') }}/images/400x400M.png">
                                                    <span class="sc1">
                                                        <span class="sc2">
                                                            <span class="sc3">
                                                                <span class="sc4">
                                                                    <img alt="Martial Arts" src="{{ asset('assets') }}/images/400x400M.png">
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_courses isotope_item_courses_3 isotope_column_3">
                                    <div
                                        class="post_item post_item_courses post_item_courses_3post_format_standard even">
                                        <div
                                            class="post_content isotope_item_content ih-item colored square effect_gym left_to_right">
                                            <div class="post_featured img">
                                                <a href="#">
                                                    <img alt="Yoga &amp; Pilates"
                                                         src="{{ asset('assets') }}/images/400x400.png">
                                                    <span class="sc1">
                                                        <span class="sc2">
                                                            <span class="sc3">
                                                                <span class="sc4">
                                                                    <img alt="Yoga &amp; Pilates" src="{{ asset('assets') }}/images/400x400.png">
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                                <h4 class="post_title">
                                                    <a href="#">Yoga &#038; Pilates</a>
                                                </h4>
                                                <div class="post_descr">
                                                    <div class="post_excerpt">From increased strength to flexibility to
                                                        heart health, we have 38 benefits to rolling out the mat.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="isotope_item isotope_item_courses isotope_item_courses_3 isotope_column_3">
                                    <div
                                        class="post_item post_item_courses post_item_courses_3post_format_standard odd last">
                                        <div
                                            class="post_content isotope_item_content ih-item colored square effect_gym left_to_right">
                                            <div class="post_featured img">
                                                <h4 class="post_title">
                                                    <a href="#">Weight Training</a>
                                                </h4>
                                                <div class="post_descr">
                                                    <div class="post_excerpt">Here are the basic guidelines, rules, and
                                                        easy-to-follow workouts.
                                                    </div>
                                                </div>
                                                <a href="#">
                                                    <img alt="Weight Training"
                                                         src="{{ asset('assets') }}/images/400x400W.png">
                                                    <span class="sc1">
                                                        <span class="sc2">
                                                            <span class="sc3">
                                                                <span class="sc4">
                                                                    <img alt="Weight Training" src="{{ asset('assets') }}/images/400x400W.png">
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grey_section team_section">
        <div class="container">
            <div class="row">
                <div class="sc_section bg_tint_light">
                    <div class="sc_content content_wrap">
                        <div class="sc_section bg_tint_none aligncenter">
                            <h2 class="sc_title style_1">POPULAR COURSES</h2>
                            <h5 class="sc_undertitle style_3">Choose your style</h5>
                            <div class="sc_team sc_team_style_4">
                                <div class="sc_columns columns_wrap">
                                    @foreach($popular as $rs)
                                    <div class="column-1_3">
                                        <div class="sc_team_item sc_team_item_1 odd first">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team-1-style4.png" src="{{Storage::url($rs->image)}}" style="height: 200px">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_size_small">
                                                            <div class="sc_socials_item">
                                                                <a href="{{route('course',['id'=>$rs->id])}}"
                                                                   class="social_icons social_facebook icons">
                                                                    <span class="icon-file73"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h6 class="sc_team_item_title">
                                                    <a href="{{route('course',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="grey_section team_section">
        <div class="container">
            <div class="row">
                <div class="sc_section bg_tint_light">
                    <div class="sc_content content_wrap">
                        <div class="sc_section bg_tint_none aligncenter">
                            <h2 class="sc_title style_1">LAST COURSES</h2>
                            <h5 class="sc_undertitle style_3">Choose your style</h5>
                            <div class="sc_team sc_team_style_4">
                                <div class="sc_columns columns_wrap">
                                    @foreach($last as $rs)
                                        <div class="column-1_3">
                                            <div class="sc_team_item sc_team_item_1 odd first">
                                                <div class="sc_team_item_avatar">
                                                    <img alt="team-1-style4.png" src="{{Storage::url($rs->image)}}" style="height: 200px">
                                                    <div class="sc_team_item_hover">
                                                        <div class="sc_team_item_socials">
                                                            <div class="sc_socials sc_socials_size_small">
                                                                <div class="sc_socials_item">
                                                                    <a href="{{route('course',['id'=>$rs->id])}}"
                                                                       class="social_icons social_facebook icons">
                                                                        <span class="icon-file73"></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="sc_team_item_info">
                                                    <h6 class="sc_team_item_title">
                                                        <a href="{{route('course',['id'=>$rs->id])}}">{{$rs->title}}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no_padding sc_parallax bg_tint_dark" data-parallax-speed="0.3" data-parallax-x-pos="50%"
             data-parallax-y-pos="50%">
        <div class="container sc_parallax_content bg_image_12">
            <div class="row">
                <div class="sc_section bg_tint_none">
                    <div class="sc_section_overlay texture_bg_1">
                        <div class="sc_section_content">
                            <div class="sc_content content_wrap">
                                <div class="sc_section bg_tint_none aligncenter">
                                    <h6 class="sc_abovetitle style_1">VIDEO. TRAINING.</h6>
                                    <h1 class="sc_title style_1">30-MINUTE CIRCUIT PROGRAM</h1>
                                    <h4 class="sc_undertitle style_2">World-class personal trainers. World-class
                                        results.</h4>
                                    <a href="{{route('videoplayer')}}" rel="prettyPhoto"
                                       class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_large  sc_button_iconed inherit popup_link">WATCH
                                        THE TRAINING VIDEO</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="grey_section team_section">
        <div class="container">
            <div class="row">
                <div class="sc_section bg_tint_light">
                    <div class="sc_content content_wrap">
                        <div class="sc_section bg_tint_none aligncenter">
                            <h2 class="sc_title style_1">OUR TRAINERS &amp; INSTRUCTORS</h2>
                            <h5 class="sc_undertitle style_3">Choose your style</h5>
                            <div class="sc_team sc_team_style_4">
                                <div class="sc_columns columns_wrap">
                                    <div class="column-1_4">
                                        <div class="sc_team_item sc_team_item_1 odd first">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team-1-style4.png"
                                                     src="{{ asset('assets') }}/images/270x470.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_size_small">
                                                            <div class="sc_socials_item">
                                                                <a href="https://tr-tr.facebook.com/" target="_blank"
                                                                   class="social_icons social_facebook icons">
                                                                    <span class="icon-facebook"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://twitter.com/?lang=tr" target="_blank"
                                                                   class="social_icons social_twitter icons">
                                                                    <span class="icon-twitter"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://www.google.com/" target="_blank"
                                                                   class="social_icons social_gplus icons">
                                                                    <span class="icon-gplus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h6 class="sc_team_item_title">
                                                    <a href="#">Jim Brown</a>
                                                </h6>
                                                <div class="sc_team_item_position">Weight</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_4">
                                        <div class="sc_team_item sc_team_item_2 even">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team-2-style4.png"
                                                     src="{{ asset('assets') }}/images/270x470M.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_size_small">
                                                            <div class="sc_socials_item">
                                                                <a href="https://tr-tr.facebook.com/" target="_blank"
                                                                   class="social_icons social_facebook icons">
                                                                    <span class="icon-facebook"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://twitter.com/?lang=tr" target="_blank"
                                                                   class="social_icons social_twitter icons">
                                                                    <span class="icon-twitter"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://www.google.com/" target="_blank"
                                                                   class="social_icons social_gplus icons">
                                                                    <span class="icon-gplus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h6 class="sc_team_item_title">
                                                    <a href="#">Maria Smith</a>
                                                </h6>
                                                <div class="sc_team_item_position">Yoga</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_4">
                                        <div class="sc_team_item sc_team_item_3 odd">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team-3-style4.png"
                                                     src="{{ asset('assets') }}/images/270x470J.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_size_small">
                                                            <div class="sc_socials_item">
                                                                <a href="https://tr-tr.facebook.com/" target="_blank"
                                                                   class="social_icons social_facebook icons">
                                                                    <span class="icon-facebook"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://twitter.com/?lang=tr" target="_blank"
                                                                   class="social_icons social_twitter icons">
                                                                    <span class="icon-twitter"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://www.google.com/" target="_blank"
                                                                   class="social_icons social_gplus icons">
                                                                    <span class="icon-gplus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h6 class="sc_team_item_title">
                                                    <a href="#">John Anderson</a>
                                                </h6>
                                                <div class="sc_team_item_position">GYM</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column-1_4">
                                        <div class="sc_team_item sc_team_item_4 even">
                                            <div class="sc_team_item_avatar">
                                                <img alt="team-4-style4.png"
                                                     src="{{ asset('assets') }}/images/270x470A.png">
                                                <div class="sc_team_item_hover">
                                                    <div class="sc_team_item_socials">
                                                        <div class="sc_socials sc_socials_size_small">
                                                            <div class="sc_socials_item">
                                                                <a href="https://tr-tr.facebook.com/" target="_blank"
                                                                   class="social_icons social_facebook icons">
                                                                    <span class="icon-facebook"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://twitter.com/?lang=tr" target="_blank"
                                                                   class="social_icons social_twitter icons">
                                                                    <span class="icon-twitter"></span>
                                                                </a>
                                                            </div>
                                                            <div class="sc_socials_item">
                                                                <a href="https://www.google.com/" target="_blank"
                                                                   class="social_icons social_gplus icons">
                                                                    <span class="icon-gplus"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sc_team_item_info">
                                                <h6 class="sc_team_item_title">
                                                    <a href="#">Anna Lee</a>
                                                </h6>
                                                <div class="sc_team_item_position">Fitness</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no_padding">
        <div class="container">
            <div class="row">
                <div class="sc_section cascade bg_tint_dark">
                    <div class="sc_content content_wrap">
                        <div class="sc_section with_padding bg_tint_none aligncenter">
                            <h5 class="sc_abovetitle style_2">Are you a Personal Trainer?</h5>
                            <h1 class="sc_title style_2">WE HAVE ALL YOU NEED TO RUN YOUR BUSINESS</h1>
                            <a href="#"
                               class="sc_button  sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_large  sc_button_iconed inherit">SEE
                                PLANS AND PRICING</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no_padding bg_image_13">
        <div class="container">
            <div class="row">
                <div class="sc_section overlay_padding_off bg_tint_none">
                    <div class="sc_section_overlay">
                        <section class="red_opacity_section">
                            <div class="container">
                                <div class="sc_section_content">
                                    <div class="sc_content content_wrap">
                                        <div class="sc_section bg_tint_dark aligncenter">
                                            <h2 class="sc_title">JOIN THE GYM STYLE!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="sc_section overlay_padding_off bg_tint_none">
                    <div class="sc_section_overlay">
                        <section class="grey_opacity_section">
                            <div class="container">
                                <div class="sc_section_content">
                                    <div class="sc_content content_wrap">
                                        <div class="sc_section bg_tint_dark aligncenter">
                                            <h2 class="sc_title style_1">GET IN TOUCH</h2>
                                            <h5 class="sc_undertitle style_4">Have a question for us?</h5>
                                        </div>
                                    </div>
                                    <div class="sc_content content_wrap margin_top_middle">
                                        <div
                                            class="columns_wrap sc_columns columns_nofluid sc_columns_count_2 custom_columns">
                                            <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                                <div class="bg_tint_dark">
                                                    <div class="column-1_2">
                                                        <p>
                                                            <strong>OPERATING HOURS:</strong>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>Monday to Friday 10:00 to 23:00.<br/>Saturdays 12:00 to
                                                            00:00.<br/>Sundays 14:00 to 22:00.</p>
                                                        <p>Closed on public holidays.</p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <strong>ADDRESS:</strong>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                            <p>{{$setting->address}}</p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <strong>TELEPHONE:</strong>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>{{$setting->phone}}</p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <strong>FAX:</strong>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>{{$setting->fax}}</p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>
                                                            <strong>EMAIL:</strong>
                                                        </p>
                                                    </div>
                                                    <div class="column-1_2">
                                                        <p>{{$setting->email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column-1_2 sc_column_item sc_column_item_2 bg_tint_dark even">
                                                <div class="sc_contact_form sc_contact_form_standard contact_form_1">
                                                    <form class="contact_1" method="post"
                                                          action="include/contact-form.php">
                                                        <div class="sc_contact_form_info">
                                                            <div
                                                                class="sc_contact_form_item sc_contact_form_field label_over">
                                                                <input type="text" name="name"
                                                                       id="contact_form_username" placeholder="Name *">
                                                            </div>
                                                            <div
                                                                class="sc_contact_form_item sc_contact_form_field label_over">
                                                                <input type="text" name="email" id="contact_form_email"
                                                                       placeholder="Email *">
                                                            </div>
                                                            <div
                                                                class="sc_contact_form_item sc_contact_form_field label_over">
                                                                <input type="text" name="subject" id="contact_form_subj"
                                                                       placeholder="Subject *">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="message sc_contact_form_item sc_contact_form_message label_over">
                                                            <div class="">
                                                                <textarea id="contact_form_message" class="textAreaSize"
                                                                          name="message"
                                                                          placeholder="Message *"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="sc_contact_form_item sc_contact_form_button">
                                                            <div
                                                                class="squareButton sc_button_size sc_button_style_global global">
                                                                <button type="submit" name="contact_submit"
                                                                        class="contact_form_submit">Send Message
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="result sc_infobox"></div>
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
    </section>
@endsection

