@extends('layouts.adminbase')

@section('title', 'Edit Category :'.$data->title)


@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1> Edit Category:  {{$data->title}} </h1>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <!--card body -->
                        <h4 class="card-title">Category Elements</h4>
                        <p class="card-description">  </p>
                        <form class="forms-sample" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                            @csrf

                            <div class = "form-group">
                                <label>Parent Category</label>

                                <select class ="form-control select2" name="parent_id" style="...">
                                    <option value = "0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs -> id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif >
                                            {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}
                                        </option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class ="input-group">
                                    <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <div class ="card-footer">
                            <button type="submit" class="btn btn-primary mr-2">Update Data</button>
                            <button class="btn btn-dark">Cancel</button>
                                </form>
                </div>
            </div>
                    </div>
                </div>
    </div>
    </div>


        <!-- content-wrapper ends -->

@endsection
