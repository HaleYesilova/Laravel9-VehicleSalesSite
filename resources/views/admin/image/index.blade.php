@extends('layouts.adminwindow')

@section('title', 'Car Image Gallery')


@section('content')

    <h3>{{$car->title}}</h3>
    <hr>
    <form class="forms-sample" action="{{route('admin.image.store',['cid'=>$car->id])}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group col-xs-12">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Title">
       <div class="input-group col-xs-12">
            <input type="text" class="form-control file-upload-info" disabled="" id="exampleInputFile" name ="image" placeholder="Upload Image">
       </div>

            <div class="input-group-append">
                <input class="input-group-text" type="submit" value="upload">
            </div>

        </div>
    </form>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="{{route('admin.category.create')}}" class="btn btn-outline-secondary btn-lg btn-block">Add Car</a>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Car Image List</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>

                                    <th>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}"style = " height: 100px">
                                        @endif
                                    </th>
                                    <th><a href="{{route('admin.image.delete',['cid'=>$car->id,'id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-fw" >Delete</a> </th>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!--  content-wrapper ends -->
@endsection

