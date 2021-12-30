@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')

@section('title', 'Contact - '. $setting->title)
@section('description'){{ $setting->description }}@endsection
@section('keywords',$setting->keywords)

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Contact</span>
            </div>
        </div>
        <div class="content_wrap">
            <h5 class="page_title">CONTACT</h5><br>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <article class="post_item post_item_excerpt post_format_standard post">
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
                                                                            <strong>&nbsp;&nbsp;OPERATING HOURS:</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>Monday to Friday 10:00 to 23:00.<br/>Saturdays 12:00 to
                                                                            00:00.<br/>Sundays 14:00 to 22:00.</p>
                                                                        <p>Closed on public holidays.</p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>
                                                                            <strong>&nbsp;&nbsp;ADDRESS:</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>{{$setting->address}}</p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>
                                                                            <strong>&nbsp;&nbsp;TELEPHONE:</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>{{$setting->phone}}</p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>
                                                                            <strong>&nbsp;&nbsp;FAX:</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>{{$setting->fax}}</p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>
                                                                            <strong>&nbsp;&nbsp;EMAIL:</strong>
                                                                        </p>
                                                                    </div>
                                                                    <div class="column-1_2">
                                                                        <p>{{$setting->email}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="column-1_2 sc_column_item sc_column_item_2 bg_tint_dark even">
                                                                <div class="sc_contact_form sc_contact_form_standard contact_form_1">
                                                                    @include('home.message')<br>
                                                                    <form class="" method="post" action="{{route('sendmessage')}}">
                                                                        @csrf
                                                                        <div class="sc_contact_form_info">
                                                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                <input type="text" name="name" id="contact_form_username" placeholder="Name&Surname">
                                                                            </div>
                                                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                <input type="email" name="email" id="contact_form_email" placeholder="Email">
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_contact_form_info">
                                                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                <input type="text" name="phone" id="contact_form_email" placeholder="Phone Number">
                                                                            </div>
                                                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                                                <input type="text" name="subject" id="contact_form_subj" placeholder="Subject">
                                                                            </div>
                                                                        </div>
                                                                        <div class="message sc_contact_form_item sc_contact_form_message label_over">
                                                                            <div class="">
                                                                                <textarea id="message" class="textAreaSize" name="message" placeholder="Message"></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sc_contact_form_item sc_contact_form_button">
                                                                                <button type="submit" name="sendmessage" class="contact_form_submit">Send Message</button>
                                                                        </div>
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
                            </article>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>

@endsection
