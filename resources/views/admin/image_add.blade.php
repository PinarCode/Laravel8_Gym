<html>
<head>
    <title>Image Gallery</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/admin/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets') }}/admin/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('assets') }}/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/admin/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

</head>
<body>
    <!--**********************************
                Content body start
            ***********************************-->

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$data->title}}</h4>
                        </div>
                        <div class="card-body pb-1">
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="{{route('admin_image_store',['course_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-12">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Image</button>
                                    </form>
                                    <table class="table table-responsive-md">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TITLE</th>
                                            <th>IMAGE</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($images as $rs)
                                            <tr>
                                                <td><strong>{{$rs->id}}</strong></td>
                                                <td>{{$rs->title}}</td>
                                                <td>
                                                    @if($rs->image)
                                                        <img src="{{ Storage::url($rs->image)}}" height="60" alt="">
                                                    @endif
                                                </td>
                                                <td><a href="{{route('admin_image_delete',['id'=>$rs->id,'course_id'=>$data->id])}}" onclick="return confirm('Record will be delete ! Are you sure?')"><img src="{{ asset('assets') }}/admin/icons/feather/trash-2.svg"></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# card -->

    <!--**********************************
        Content body end
    ***********************************-->
</body>
</html>
