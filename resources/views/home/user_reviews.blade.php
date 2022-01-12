@extends('layouts.home')

@section('title', 'My Reviews')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">My Reviews</span>
            </div>
        </div>
        <div class="content_wrap">
            <h1 class="page_title">@include('home.usermenu')</h1>
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div class="sc_section bg_tint_none">
                                <div class="sc_table style_1">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Course</th>
                                                <th>Subject</th>
                                                <th>Review</th>
                                                <th>Rate</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                <th colspan="3">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @include('home.message')
                                        @foreach($datalist as $rs)
                                            <tr style="color: black; background-color: snow">
                                                <td>{{$rs->id}}</td>
                                                <td><a href="{{route('course',['id' => $rs->course->id])}}" target="_blank">{{$rs->course->title}}</a></td>
                                                <td>{{$rs->subject}}</td>
                                                <td>{{$rs->review}}</td>
                                                <td>{{$rs->rate}}</td>
                                                <td>{{$rs->status}}</td>
                                                <td>{{$rs->created_at}}</td>
                                                <td><a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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
