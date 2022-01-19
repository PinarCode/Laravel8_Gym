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
                            <form action="{{route('user_course_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-10">
                                        <label>Category</label><br>
                                        <select class="form-control default-select" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control" style="width: 100%">
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" style="width: 100%">
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control" style="width: 100%">
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Detail</label>
                                        <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{$data->price}}" class="form-control" style="width: 100%">
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Month</label>
                                        <input type="number" name="month" value="{{$data->month}}" class="form-control" style="width: 100%">
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Image</label><br>
                                        <input type="file" name="image" class="form-control"><br>
                                        @if($data->image)
                                            <img src="{{ Storage::url($data->image)}}" style="height: 100px" alt="">
                                        @endif
                                    </div><br>
                                    <div class="col-md-10">
                                        <label>Status</label> &nbsp;
                                        <select class="form-control default-select" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                </div><br>
                                <button type="submit" class="sc_button sc_button_square sc_button_style_filled sc_button_bg_color2 sc_button_size_medium  sc_button_iconed">Update Course</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
