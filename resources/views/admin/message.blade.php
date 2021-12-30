@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Messages</h4><br>
                            @include('home.message')
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
                                                    <th>EMAIL</th>
                                                    <th>PHONE</th>
                                                    <th>SUBJECT</th>
                                                    <th>MESSAGE</th>
                                                    <th>ADMIN NOTE</th>
                                                    <th colspan="3">ACTIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                <tr>
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>{{$rs->name}}</td>
                                                    <td>{{$rs->email}}</td>
                                                    <td>{{$rs->phone}}</td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->message}}</td>
                                                    <td>{{$rs->note}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href, '', 'top=50 left=100 widht=1100 height=700')">
                                                            <img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a>
                                                    </td>
                                                    <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
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
