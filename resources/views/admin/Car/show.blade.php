@extends('layouts.adminbase')

@section('title', 'Show Car :'.$data->title)


@section('content')
    <!-- partial -->

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Detail</h4>
                <div class="container-fluid">
                    <div class="row mb-2">

                <div class="col-sm-3">
                <a href="{{route('admin.car.edit',['id'=>$data->id])}}" class="btn btn-inverse-info btn-fw">Edit</a>
            </div>
                    <div class="col-sm-3">
                        <a href="{{route('admin.car.delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-inverse-danger btn-fw">Delete</a>
                    </div>

                    </div>
                </div>
                <p class="card-description"> Car Detail Data <code></code>
                </p>
                <div class="table-responsive">
                    <table class="table table-hover">

                        <tr>
                            <th style="width: 200px">Id</th>
                            <td>{{$data->id}}</td>

                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>
                                {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category, $data->category->title) }}

                            </td>
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
                            <th>Price</th>
                            <td>{{$data->price}}</td>
                        </tr>
                        <tr>
                            <th>Tax</th>
                            <td>{{$data->tax}}</td>
                        </tr>
                        <tr>
                            <th>KM</th>
                            <td>{{$data->km}}</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>{{$data->color}}</td>
                        </tr>
                        <tr>
                            <th>Fuel</th>
                            <td>{{$data->fuel}}</td>
                        </tr>
                        <tr>
                            <th>Year</th>
                            <td>{{$data->year}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <th>Detail Inf</th>
                            <td>{{$data->detail}}</td>

                        </tr>
                        <tr>
                            <th>Image</th>
                            <td>
                                    @if ($data->image)
                                    <img src="{{Storage::url($data->image)}}" style="height: 100px">
                                @endif
                            </td>
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
