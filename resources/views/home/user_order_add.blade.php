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
                                <div class="column-2_3 sc_column_item sc_column_item_1 odd first">
                                    <div class="sc_price_block sc_price_block_style_1">
                                        <form class="contact_1" method="post" action="include/contact-form.php">
                                            <div class="sc_contact_form_info"><br>
                                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Name: </b></label></div><br>
                                                    <input class="column-9_10" type="text" name="name" id="contact_form_username" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                </div><br>
                                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Email: </b></label></div><br>
                                                    <input class="column-9_10" type="text" name="email" id="contact_form_email" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                </div><br>
                                                <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                    <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Subject: </b></label></div><br>
                                                    <input class="column-9_10" type="text" name="subject" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                                </div><br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="column-1_3 sc_column_item sc_column_item_2 even">
                                    <div class="sc_price_block sc_price_block_style_2 marked">
                                        <div class="sc_contact_form_info"><br>
                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Name: </b></label></div><br>
                                                <input class="column-9_10" type="text" name="name" id="contact_form_username" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                            </div><br>
                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Email: </b></label></div><br>
                                                <input class="column-9_10" type="text" name="email" id="contact_form_email" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
                                            </div><br>
                                            <div class="sc_contact_form_item sc_contact_form_field label_over">
                                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label style="color: black"><b>Subject: </b></label></div><br>
                                                <input class="column-9_10" type="text" name="subject" id="contact_form_subj" style="outline: none !important;border-color: black;box-shadow: 0 0 10px black;margin-left: 30px">
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
