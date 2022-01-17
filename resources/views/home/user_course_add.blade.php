@extends('layouts.home')

@section('title', 'Add Course')

@section('headerjs')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <br>
    <br><br><br><br><br>
    <div class="top_panel_style_dark page_top_wrap page_top_title page_top_breadcrumbs">
        <div class="breadcrumbs">
            <div class="content_wrap">
                <a class="breadcrumbs_item home" href="{{route('homepage')}}">Home</a>
                <span class="breadcrumbs_delimiter"></span>
                <span class="breadcrumbs_item current">Add Course</span>
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
                            <form action="{{route('user_course_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select class="form-control default-select" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option
                                                    value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Detail</label>
                                        <textarea id="detail" name="detail"></textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="number" name="price" value="0" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Month</label>
                                        <input type="number" name="month" value="1" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control default-select" name="status">
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color2 sc_button_size_medium  sc_button_iconed">Add Course</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
