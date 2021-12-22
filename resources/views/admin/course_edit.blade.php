@extends('layouts.admin')

@section('title', 'Edit Course')

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Course</h4>
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_course_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category</label>
                                                <select class="form-control default-select" name="category_id">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}" @if ($rs->id == $data->category_id) selected="selected" @endif>{{$rs->title}}</option>
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
                                                <textarea id="summernote" name="detail"></textarea>
                                                <script>
                                                    $('#summernote').summernote({
                                                        tabsize: 2,
                                                        height: 100
                                                    });
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
                                                <input type="file" name="image" value="{{$data->image}}" class="form-control">
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
                        </div>
                    </div>
                    <!-- /# card -->
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
