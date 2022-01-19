@extends('layouts.admin')

@section('title', 'Edit Course')

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
                                    <form action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Email</label>
                                                <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                                @if($data->profile_photo_path)
                                                    <img src="{{ Storage::url($data->profile_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update User</button>
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
