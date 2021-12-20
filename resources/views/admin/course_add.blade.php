@extends('layouts.admin')

@section('title', 'Add Course')

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
                            <h4 class="card-title">Add Course</h4>
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_course_store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Category</label>
                                                <select class="form-control default-select" name="category_id">
                                                    @foreach($datalist as $rs)
                                                    <option value="{{$rs->id}}">{{$rs->title}}</option>
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
                                        <button type="submit" class="btn btn-primary">Add Course</button>
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
