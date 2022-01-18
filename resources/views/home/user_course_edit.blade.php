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
                                    <div class="form-group col-md-6">
                                        <label>Category</label>
                                        <select class="form-control default-select" name="category_id">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Title</label>
                                        <input type="text" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Keywords</label>
                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Description</label>
                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Detail</label>
                                        <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                                        <script>
                                            CKEDITOR.replace( 'detail' );
                                        </script>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Price</label>
                                        <input type="number" name="price" value="{{$data->price}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Month</label>
                                        <input type="number" name="month" value="{{$data->month}}" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                        @if($data->image)
                                            <img src="{{ Storage::url($data->image)}}" height="80" alt="">
                                        @endif
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control default-select" name="status">
                                            <option selected="selected">{{$data->status}}</option>
                                            <option>False</option>
                                            <option>True</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Course</button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <br>
@endsection
