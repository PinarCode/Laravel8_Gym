@extends('layouts.admin')

@section('title', 'Course List')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Course List</h4><br>
                            <span class="btn light btn-info"><a href="{{route('admin_category_add')}}">Add Course</a></span>
                        </div>
                        <div class="card-body pb-1">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-responsive-md">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>PARENT</th>
                                                    <th>TİTLE</th>
                                                    <th>STATUS</th>
                                                    <th>EDİT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                <tr>
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>{{$rs->parent_id}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><span class="btn light btn-warning"><a href="{{route('admin_category_edit',['id'=>$rs->id])}}">Edit</a></span></td>
                                                    <td><span class="btn light btn-danger"><a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')">Delete</a></span></td>
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
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
