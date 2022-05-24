@extends('layouts.adminbase')

@section('title', 'Edit Car :'.$data->title)


@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1> Edit Car:  {{$data->title}} </h1>
            <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <!--card body -->
                        <h4 class="card-title">Car Elements</h4>
                        <p class="card-description">  </p>
                        <form class="forms-sample" action="{{route('admin.car.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data" >
                            @csrf

                            <div class = "form-group">
                                <label>Parent Car</label>

                                <select class ="form-control select2" name="category_id" style="...">

                                    @foreach($datalist as $rs)
                                        <option value="{{ $rs -> id }}" @if ($rs->id == $data->category_id) selected="selected" @endif >
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
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" class="form-control" name="price" value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tax %</label>
                                <input type="number" class="form-control" name="tax" value="{{$data->tax}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail Inf.</label>
                                <textarea  class="form-control" name="detail" >
                                    {{$data->detail}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fuel</label>
                                <input type="text" class="form-control" name="fuel" placeholder="{{$data->fuel}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year</label>
                                <input type="number" class="form-control" name="year" value="{{$data->Year}}" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">KM</label>
                                <input type="number" class="form-control" name="KM" value="{{$data->KM}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Color</label>
                                <input type="text" class="form-control" name="Color"placeholder="{{$data->color}}">
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
