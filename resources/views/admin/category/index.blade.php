@extends('layouts.adminbase')

@section('title', 'Category List')


@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Category List</h1>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Category List</h4>
                <p class="card-description"> Add class <code>.table</code>
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>title</th>
                            <th>keywords</th>
                            <th>description</th>
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
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <th>{{$rs->image}}</th>
                            <th>{{$rs->status}}</th>
                            <th><a href="/admin/category/edit{{$rs->id}}" class="btn btn-outline-primary btn-fw" >Edit</a> </th>
                            <th><a href="/admin/category/delete{{$rs->id}}" class="btn btn-outline-primary btn-fw" >Delete</a> </th>
                            <th><a href="/admin/category/show{{$rs->id}}" class="btn btn-outline-primary btn-fw" >Show</a> </th>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--  content-wrapper ends -->
@endsection
