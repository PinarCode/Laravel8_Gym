@extends('layouts.admin')

@section('title', 'User List')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Users</h4><br>
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
                                                    <th></th>
                                                    <th>NAME</th>
                                                    <th>EMAIL</th>
                                                    <th>PHONE</th>
                                                    <th>ADDRESS</th>
                                                    <th>ROLES</th>
                                                    <th style="..." colspan="2">ACTIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($datalist as $rs)
                                                    <p></p>
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>
                                                            @if($rs->profile_photo_path)
                                                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                                            @endif
                                                        </td>
                                                        <td>{{$rs->name}}</td>
                                                        <td>{{$rs->email}}</td>
                                                        <td>{{$rs->phone}}</td>
                                                        <td>{{$rs->address}}</td>
                                                        <td>
                                                            @foreach($rs->roles as $row)
                                                                {{$row->name}},
                                                            @endforeach
                                                            <a href="{{route('admin_user_roles',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=300 width=800 height=700')">
                                                                <img src="{{ asset('assets') }}/admin/icons/feather/plus-circle.svg">
                                                            </a>
                                                        </td>
                                                        <td><a href="{{route('admin_user_edit',['id'=>$rs->id])}}"><img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a></td>
                                                        <td><a href="{{route('admin_user_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
                                                    </tr>
                                                @endforeach
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
