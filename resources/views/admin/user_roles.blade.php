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
                            <h4 class="card-title">User Detail</h4>
                            @include('home.message')
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                        <div class="form-row">
                                            <table class="table table-responsive-md" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <td>{{$data->id}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{$data->name}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{$data->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Roles</th>
                                                    <td>
                                                        <table>
                                                            @foreach($data->roles as $row)
                                                                <tr>
                                                                    <td>{{$row->name}}</td>
                                                                    <td>
                                                                        <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}} " onclick="return confirm('Delete! Are you sure?')">
                                                                            <img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg">
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </table>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Add Role</th>
                                                    <td>
                                                        <form class="" novalidate=""
                                                              action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post"
                                                              enctype="multipart/form-data">
                                                            @csrf
                                                            <select name="roleid">
                                                                @foreach($datalist as $rs)
                                                                    <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                                @endforeach
                                                            </select> &nbsp;
                                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                                </thead>
                                                <tbody>
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
