@extends('layouts.admin')

@section('title', 'Edit Course')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Course</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Course</h4>
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_course_update', ['id'=>$data->id])}}" method="post">
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
                                            <div class="form-group col-md-6">
                                                <label>Detail</label>
                                                <input type="text" name="detail" value="{{$data->detail}}" class="form-control">
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
