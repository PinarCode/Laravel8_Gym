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

    </div>
    <div class="page_content_wrap">
        <div class="content_wrap">
            <div class="content">
                <section class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="content_wrap">
                                    @include('home.usermenu')
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <form class="" action="{{route('user_course_store')}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-10">
                                        <label>Category</label><br>
                                        <select class="form-select" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option
                                                    value="{{$rs->id}}"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Title</label><br>
                                        <input type="text" name="title" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Keywords</label><br>
                                        <input type="text" name="keywords" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Description</label>
                                        <input type="text" name="description" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Detail</label>
                                        <textarea id="detail" name="detail"></textarea>
                                        <script>
                                            CKEDITOR.replace('detail');
                                        </script>
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Price</label>
                                        <input type="number" name="price" value="0" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Month</label>
                                        <input type="number" name="month" value="1" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-group" style="width: 100%">
                                    </div>
                                    <br>
                                    <div class="col-md-10">
                                        <label>Status</label> &nbsp;
                                        <select class="form-select" name="status">
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                    <br>

                                    <button type="submit"
                                            class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color2 sc_button_size_medium  sc_button_iconed">
                                        Add Course
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
