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
                            <h4 class="card-title">Message Detail</h4>
                            @include('home.message')
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <table class="table table-responsive-md" style="width:100%">
                                                <tr>
                                                    <th>ID</th> <td><strong>{{$data->id}}</strong></td>
                                                </tr>
                                                <tr>
                                                    <th>NAME</th> <td>{{$data->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>EMAIL</th> <td>{{$data->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>PHONE</th> <td>{{$data->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <th>SUBJECT</th> <td>{{$data->subject}}</td>
                                                </tr>
                                                <tr>
                                                    <th>MESSAGE</th> <td>{{$data->message}}</td>
                                                </tr>
                                                <tr>
                                                    <th>ADMIN NOTE</th>
                                                    <td>
                                                        <textarea id="note" name="note">{{$data->note}}</textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td><button type="submit" class="btn btn-primary">Update Message</button></td>
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
