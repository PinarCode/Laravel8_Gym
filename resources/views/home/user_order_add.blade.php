@extends('layouts.home')

@section('title', 'Order Courses')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Order</span>
            </div>
        </div>
        <div class="content_wrap">
            <h3 class="page_title">Order</h3>
        </div><br>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">

                            <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_3">
                                <div class="column-1_2 sc_column_item sc_column_item_1 odd first">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <form class="contact_1" action="{{route('user_order_store')}}" method="post">
                                            @csrf
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
                                            <div>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="sc_button sc_button_square sc_button_style_border sc_button_bg_color3 sc_button_size_small">Complete Payment Process</button>
                                            </div>
                                        </form>
                                    </div>
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
    <br>

@endsection
