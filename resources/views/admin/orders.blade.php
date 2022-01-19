@extends('layouts.admin')

@section('title', 'Admin Order List')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Orders</h4><br>
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
                                                <th>NAME</th>
                                                <th>PHONE</th>
                                                <th>EMAIL</th>
                                                <th>ADDRESS</th>
                                                <th>COURSE</th>
                                                <th>TOTAL</th>
                                                <th>START DATE</th>
                                                <th>FINISH DATE</th>
                                                <th>STATUS</th>
                                                <th colspan="3">ACTIONS</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr style="color: black; background-color: white">
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>
                                                        <a href="{{route('admin_user_show',['id'=>$rs->user->id])}}"
                                                           onclick="return !window.open(this.href, '', 'top=20 left=50 width=800 height=700')">

                                                            {{$rs->user->name}}</a>
                                                    </td>
                                                    <td>{{$rs->user->phone}}</td>
                                                    <td>{{$rs->user->email}}</td>
                                                    <td>{{$rs->user->address}}</td>
                                                    <td>{{$rs->course->title}}</td>
                                                    <td>{{$rs->total}}</td>
                                                    <td>{{$rs->created_at}}</td>
                                                    <td>{{$rs->finishDate}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin_order_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 widht=1100 height=800')">
                                                            <img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->

@endsection
