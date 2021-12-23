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
                            <span class="btn light btn-info"><a href="{{route('admin_course_add')}}">Add Course</a></span>
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
                                                    <th>CATEGORY</th>
                                                    <th>TITLE</th>
                                                    <th>PRICE</th>
                                                    <th>MONTH</th>
                                                    <th>IMAGE</th>
                                                    <th>GALLERY</th>
                                                    <th>STATUS</th>
                                                    <th>EDİT</th>
                                                    <th>DELETE</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                <tr>
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>
                                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title)}}
                                                    </td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->price}}</td>
                                                    <td>{{$rs->month}}</td>
                                                    <td>
                                                        @if($rs->image)
                                                            <img src="{{ Storage::url($rs->image)}}" height="30" alt="">
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin_image_add',['course_id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 widht=1100 height=700')">
                                                            <img src="{{ asset('assets') }}/admin/images/gallery.png" height="30"></a>
                                                    </td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin_course_edit',['id'=>$rs->id])}}"><img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a></td>
                                                    <td><a href="{{route('admin_course_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
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
