@extends('layouts.home')

@section('title', 'My Orders')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">My Orders</span>
            </div>
        </div>
        <div class="content_wrap">
            @include('home.usermenu')
        </div>
    </div><br>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="sc_section bg_tint_none">
                                        <div class="sc_table style_1">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NAME</th>
                                                    <th>PHONE</th>
                                                    <th>EMAIL</th>
                                                    <th>ADDRESS</th>
                                                    <th>COURSE</th>
                                                    <th>TOTAL</th>
                                                    <th>START DATE</th>
                                                    <th>FINISH DATE</th>
                                                    <th>STATUS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                    <tr style="color: black; background-color: snow">
                                                        <td><strong>{{$rs->id}}</strong></td>
                                                        <td>{{$rs->user->name}}</td>
                                                        <td>{{$rs->user->phone}}</td>
                                                        <td>{{$rs->user->email}}</td>
                                                        <td>{{$rs->user->address}}</td>
                                                        <td>{{$rs->course->title}}</td>
                                                        <td>{{$rs->total}}</td>
                                                        <td>{{$rs->created_at}}</td>
                                                        <td>{{$rs->finishDate}}</td>
                                                        <td>{{$rs->status}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
