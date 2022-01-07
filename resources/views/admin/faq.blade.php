@extends('layouts.admin')

@section('title', 'Frequently Asked Question List')

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Frequently Asked Question List</h4><br>
                            @include('home.message')
                            <span class="btn light btn-info"><a href="{{route('admin_faq_add')}}">Add FAQ</a></span>
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
                                                    <th>POSITION</th>
                                                    <th>QUESTION</th>
                                                    <th>ANSWER</th>
                                                    <th>STATUS</th>
                                                    <th colspan="2">ACTIONS</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach ($datalist as $rs)
                                                <tr>
                                                    <td><strong>{{$rs->id}}</strong></td>
                                                    <td>{{$rs->position}}</td>
                                                    <td>{{$rs->question}}</td>
                                                    <td>{!! $rs->answer !!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><img src="{{ asset('assets') }}/admin/icons/feather/edit.svg"></a></td>
                                                    <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
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
