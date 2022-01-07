@extends('layouts.admin')

@section('title', 'Edit Course')

<!-- include summernote css/js -->
<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

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
                                    <form action="{{route('admin_faq_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Position</label>
                                                <input type="number" name="position" value="{{$data->position}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>Question</label>
                                                <input type="text" name="question" value="{{$data->question}}" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Answer</label>
                                                <textarea id="answer" name="answer">{{$data->answer}}</textarea>
                                                <script>
                                                    CKEDITOR.replace( 'answer' );
                                                </script>
                                            </div>
                                            <div class="form-group col-md-12">
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
