@extends('layouts.adminbase')

@section('title', 'Show Category :'.$data->title)


@section('content')
    <!-- partial -->

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Detail</h4>
                <div class="container-fluid">
                    <div class="row mb-2">

                <div class="col-sm-3">
                <a href="/admin/category/edit/{{$data->id}}" class="btn btn-inverse-info btn-fw">Edit</a>
            </div>
                    <div class="col-sm-3">
                        <a href="/admin/category/delete/{{$data->id}}" onclick="return confirm('Are you sure?')" class="btn btn-inverse-danger btn-fw">Delete</a>
                    </div>

                    </div>
                </div>
                <p class="card-description"> Product Detail Data <code></code>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">

                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>

                        </tr>
                        <tr>
                            <th>title</th>
                            <td>{{$data->title}}</td>


                        </tr>
                        <tr>
                            <th>Keywords</th>
                            <td>{{$data->keywords}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>

        <!-- content-wrapper ends -->

@endsection
