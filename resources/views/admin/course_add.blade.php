@extends('layouts.admin')

@section('title', 'Add Course')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Add Course</a></li>
                </ol>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Course</h4>
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_course_store')}}" method="post">
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
                                            <div class="form-group col-md-6">
                                                <label>Detail</label>
                                                <input type="text" name="detail" class="form-control">
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
