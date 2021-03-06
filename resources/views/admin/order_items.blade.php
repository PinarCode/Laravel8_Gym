<link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/swiper/idangerous.swiper.css' type='text/css' media='all'/>
<link rel='stylesheet' href='{{ asset('assets') }}/js/vendor/revslider/rs-plugin/css/settings.css' type='text/css'
      media='all'/>
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
                        <h4 class="card-title">Order Detail</h4>
                        @include('home.message')
                    </div>
                    <div class="card-body pb-1">
                        <div class="card-body">
                            <div class="basic-form">
                                <div class="form-row">
                                    <form action="{{route('admin_order_update', ['id'=>$data->id])}}" method="post">
                                        @csrf
                                        <table class="table table-responsive-md" style="width:100%">
                                            <tr>
                                                <th>ID</th>
                                                <td><strong>{{$data->id}}</strong></td>
                                            </tr>
                                            <tr>
                                                <th>NAME</th>
                                                <td>{{$data->user->name}}</td>
                                            </tr>
                                            <tr>
                                                <th>PHONE</th>
                                                <td>{{$data->user->phone}}</td>
                                            </tr>
                                            <tr>
                                                <th>E-MAIL</th>
                                                <td>{{$data->user->email}}</td>
                                            </tr>
                                            <tr>
                                                <th>ADDRESS</th>
                                                <td>{{$data->user->address}}</td>
                                            </tr>
                                            <tr>
                                                <th>COURSE</th>
                                                <td>{{$data->course->title}}</td>
                                            </tr>
                                            <tr>
                                                <th>TOTAL</th>
                                                <td>{{$data->total}}</td>
                                            </tr>
                                            <tr>
                                                <th>START DATE</th>
                                                <td>{{$data->startDate}}</td>
                                            </tr>
                                            <tr>
                                                <th>FINISH DATE</th>
                                                <td>{{$data->finishDate}}</td>
                                            </tr>
                                            <tr>
                                                <th>IP</th>
                                                <td>{{$data->IP}}</td>
                                            </tr>
                                            <tr>
                                                <th>CREATED DATE</th>
                                                <td>{{$data->created_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>UPDATED DATE</th>
                                                <td>{{$data->updated_at}}</td>
                                            </tr>
                                            <tr>
                                                <th>STATUS</th>
                                                <td>
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>Accepted</option>
                                                        <option>Canceled</option>
                                                        <option>Completed</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>ADMIN NOTE</th>
                                                <td><textarea name="note" rows="3"
                                                              cols="15"> {{$data->note}} </textarea></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <button type="submit" class="btn btn-primary">Update Order</button>
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                    <br><br>
                                    <table class="table table-responsive-md" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>COURSE</th>
                                            <th>TOTAL</th>
                                            <th>START DATE</th>
                                            <th>FINISH DATE</th>
                                            <th>STATUS</th>
                                            <th>NOTE</th>
                                            <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody style="background-color: white">
                                        <form action="{{route('admin_order_update', ['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <tr style="color: black; background-color: snow">
                                                <td><strong>{{$data->id}}</strong></td>
                                                <td>{{$data->course->title}}</td>
                                                <td>{{$data->total}}</td>
                                                <td>{{$data->created_at}}</td>
                                                <td>{{$data->finishDate}}</td>
                                                <td>
                                                    <select name="status">
                                                        <option selected>{{$data->status}}</option>
                                                        <option>Accepted</option>
                                                        <option>Canceled</option>
                                                        <option>Completed</option>
                                                    </select>
                                                </td>
                                                <td><textarea name="note" cols="15"> {{$data->note}} </textarea></td>
                                                <td><input type="submit" value="update"></td>
                                        </form>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
