@extends('layouts.admin')

@section('title', 'Edit Setting')

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@section('content')
    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <form action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">

                                    <!-- Nav tabs -->
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#general"><i class="la la-home mr-2"></i> General</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#smtp"><i class="la la-envelope mr-2"></i> Smtp Email</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#social"><i class="la la-instagram mr-2"></i>  Social Media</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#about"><i class="la la-user mr-2"></i> About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#contact1"><i class="la la-phone mr-2"></i> Contact Page</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#reference"><i class="la la-file mr-2"></i> References</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="general" role="tabpanel">
                                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                                    <div class="form-group col-md-12">
                                                        <label>Title</label>
                                                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Keywords</label>
                                                        <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Description</label>
                                                        <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Company</label>
                                                        <input type="text" name="company" value="{{$data->company}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Address</label>
                                                        <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Fax</label>
                                                        <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Email</label>
                                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
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
                                            <div class="tab-pane fade" id="smtp">
                                                    <div class="form-group col-md-12">
                                                        <label>Smtp Server</label>
                                                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Smtp Email</label>
                                                        <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Smtp Password</label>
                                                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Smtp Port</label>
                                                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="tab-pane fade" id="social">
                                                <div class="pt-4">
                                                    <div class="form-group col-md-12">
                                                        <label>Facebook</label>
                                                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Instagram</label>
                                                        <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Twitter</label>
                                                        <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label>Youtube</label>
                                                        <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="about">
                                                <div class="pt-4">
                                                    <div class="form-group col-md-12">
                                                        <label>About Us</label>
                                                        <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="contact1">
                                                <div class="pt-4">
                                                    <div class="form-group col-md-12">
                                                        <label>Contact</label>
                                                        <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="reference">
                                                <div class="pt-4">
                                                    <div class="form-group col-md-12">
                                                        <label>References</label>
                                                        <textarea id="references" name="references">{{$data->references}}</textarea>
                                                    </div>
                                                    <script>
                                                        $('#aboutus').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                        $('#contact').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                        $('#references').summernote({
                                                            tabsize: 2,
                                                            height: 100
                                                        });
                                                    </script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                </div>
                            </div>

                        </div>

                    </div>

                </form>
                </div>
            </div>
        </div>
    <!--**********************************
        Content body end
    ***********************************-->
@endsection
