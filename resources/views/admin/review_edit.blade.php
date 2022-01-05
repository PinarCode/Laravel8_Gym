<link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/swiper/idangerous.swiper.css' type='text/css' media='all' />
<link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/revslider/rs-plugin/css/settings.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/css/fontello/css/fontello.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/css/shortcodes.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/css/core.animation.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/css/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/css/skin.css' type='text/css' media='all'/>
<style id='themerex-custom-style-inline-css' type='text/css'></style>
<link rel='stylesheet' href='{{ asset('assets') }}/css/responsive.css' type='text/css' media='all'/>

    <!--**********************************
                Content body start
            ***********************************-->
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Review Detail</h4>
                            @include('home.message')
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_review_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <table class="table table-responsive-md">
                                                <tr>
                                                    <th>ID</th> <td><strong>{{$data->id}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>NAME</th> <td>{{$data->user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>COURSE</th> <td>{{$data->course->title}}</td>
                                                </tr>
                                                <tr>
                                                    <th>SUBJECT</th> <td>{{$data->subject}}</td>
                                                </tr>
                                                <tr>
                                                    <th>REVIEW</th> <td>{{$data->review}}</td>
                                                </tr>
                                                <tr>
                                                    <th>RATE</th> <td>{{$data->rate}}</td>
                                                </tr>
                                                <tr>
                                                    <th>IP</th> <td>{{$data->IP}}</td>
                                                </tr>
                                                <tr>
                                                    <th>CREATED DATE</th> <td>{{$data->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>UPDATED DATE</th> <td>{{$data->updated_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>STATUS</th>
                                                    <td>
                                                        <select name="status">
                                                            <option selected>{{$data->status}}</option>
                                                            <option>True</option>
                                                            <option>False</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-primary">Update Review</button></td>
                                                </tr>
                                            </table>
                                        </div>

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
