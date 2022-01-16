@extends('layouts.home')

@section('title', 'My Courses')

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">My Account</span>
            </div>
        </div>
        <div class="content_wrap">
            @include('home.usermenu')
        </div>
    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="no_padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <span class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color2 sc_button_size_medium  sc_button_iconed"><a href="{{route('user_course_add')}}">Add Course</a></span>

                                    </div><br>
                                    <div class="card-body pb-1">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-responsive-md">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>CATEGORY</th>
                                                                <th>TITLE</th>
                                                                <th>PRICE</th>
                                                                <th>MONTH</th>
                                                                <th>IMAGE</th>
                                                                <th>GALLERY</th>
                                                                <th>STATUS</th>
                                                                <th colspan="2">ACTIONS</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            @foreach ($datalist as $rs)
                                                                <tr>
                                                                    <td><strong>{{$rs->id}}</strong></td>
                                                                    <td>
                                                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                                                    </td>
                                                                    <td>{{$rs->title}}</td>
                                                                    <td>{{$rs->price}}</td>
                                                                    <td>{{$rs->month}}</td>
                                                                    <td>
                                                                        @if($rs->image)
                                                                            <img src="{{ Storage::url($rs->image)}}" style="height: 100px" alt="">
                                                                        @endif
                                                                    </td>
                                                                    <td><a href="{{route('user_image_add',['course_id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 widht=1100 height=700')">
                                                                            <img src="{{ asset('assets') }}/admin/images/gallery.png" style="height: 30px"></a>
                                                                    </td>
                                                                    <td>{{$rs->status}}</td>
                                                                    <td><a href="{{route('user_course_edit',['id'=>$rs->id])}}"><img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a></td>
                                                                    <td><a href="{{route('user_course_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
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
