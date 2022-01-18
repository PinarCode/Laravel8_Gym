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
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($datalist as $rs)
                                                <tr style="color: black; background-color: snow">
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>{{$rs->user->name}}</td>
                                                    <td>{{$rs->user->phone}}</td>
                                                    <td>{{$rs->user->email}}</td>
                                                    <td>{{$rs->user->address}}</td>
                                                    <td>{{$rs->course->title}}</td>
                                                    <td>{{$rs->total}}</td>
                                                    <td>{{$rs->created_at}}</td>
                                                    <td>{{$rs->finishDate}}</td>
                                                    <td>{{$rs->status}}</td>
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
