@extends('layouts.adminbase')

@section('title', 'Car List')


@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="{{route('admin.car.create')}}" class="btn btn-outline-secondary btn-lg btn-block">Add Category</a>
        </div>

            <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">CarList</h4>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>Category</th>
                            <th>title</th>
                            <th>price</th>
                            <th>tax</th>
                            <th>fuel</th>
                            <th>year</th>
                            <th>KM</th>
                            <th>color</th>
                            <th>image</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                            <th>show</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                        <tr>
                            <td>{{$rs->id}}</td>
                            <td> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }} </td>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->price}}</td>
                            <td>{{$rs->tax}}</td>
                            <td>{{$rs->fuel}}</td>
                            <td>{{$rs->year}}</td>
                            <td>{{$rs->KM}}</td>
                            <td>{{$rs->color}}</td>
                            <th>
                                @if ($rs->image)
                                <img src="{{Storage::url($rs->image)}}">
                                @endif
                            </th>
                            <th>{{$rs->status}}</th>
                            <th><a href="{{route('admin.category.edit',['id'=>$rs->id])}}"class="btn btn-outline-primary btn-fw" >Edit</a> </th>
                            <th><a href="{{route('admin.category.delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-fw" >Delete</a> </th>
                            <th><a href="{{route('admin.category.show',['id'=>$rs->id])}}" class="btn btn-outline-info btn-fw" >Show</a>  </th>
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
