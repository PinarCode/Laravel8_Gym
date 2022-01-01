@extends('layouts.home')

@section('title', $data->title)
@section('description'){{ $data->description }}@endsection
@section('keywords',$data->keywords)

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="index.html">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Course Detail</span>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title)}}</span>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">{{$data->title}}</span>
            </div>
        </div>
        <div class="content_wrap">
            <h5 class="page_title">Course Detail</h5><br>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div class="sc_section bg_tint_none">
                                <div class="sc_content content_wrap">
                                    <div class="columns_wrap sc_columns columns_nofluid sc_columns_count_1">
                                        <div class="column-1_1 sc_column_item sc_column_item_1 odd">

                                            <div class="sc_price_block sc_price_block_style_1">
                                                <div class="sc_price_block_title">{{$data->title}}</div>
                                                <div class="sc_price_block_money">
                                                    <div>
                                                        <span class="sc_price_currency"><img src="{{Storage::url($data->image)}}" style="height: 150px"></span>
                                                    </div>
                                                </div>
                                                <div class="sc_price_block_description">
                                                    <h3><b>{{$data->month}} months -> {{$data->price}}t</b></h3>
                                                    <p>No age limit</p>
                                                    <p>24/7 access</p>
                                                    <p>10 free trainer sessions</p>
                                                    <p>{{$data->description}}</p>
                                                </div>
                                                <div class="sc_price_block_link">
                                                    <a href="{{route('buytocourse',['id'=>$data->id])}}" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color1 sc_button_size_small">BUY COURSE NOW</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section class="content_wrap">
                                <div class="container">
                                    <div class="row">
                                        <div class="sc_section bg_tint_none">
                                            <div class="sc_content content_wrap">
                                                <div class="sc_section bg_tint_none aligncenter">
                                                    <h4 class="sc_title style_3">SPORT CLASS SCHEDULE</h4>
                                                    <h5 class="sc_undertitle style_3">Choose what you need</h5>
                                                </div>
                                                <div class="sc_table style_1">
                                                    <br/>
                                                    <table>
                                                        <tbody>
                                                        <tr>
                                                            <th>Days</th>
                                                            <th>Trainer</th>
                                                            <th>Time</th>
                                                        </tr>
                                                        <tr>
                                                            <td>Monday</td>
                                                            <td>Sherri Johnston</td>
                                                            <td>05:00 am – 10:00 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuesday</td>
                                                            <td>Elmer Black</td>
                                                            <td>05:00 am – 10:00 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Wednesday</td>
                                                            <td>Brandie Ward</td>
                                                            <td>10.30am – 11.30.am</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thursday</td>
                                                            <td>Tyler Harris</td>
                                                            <td>10.30am – 11.30.am</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Friday</td>
                                                            <td>Elmer Black</td>
                                                            <td>05:00 am – 10:00 pm</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Saturday</td>
                                                            <td>Brandie Ward</td>
                                                            <td>10.30am – 11.30.am</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sunday</td>
                                                            <td>Tyler Harris</td>
                                                            <td>10.30am – 11.30.am</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>

@endsection
