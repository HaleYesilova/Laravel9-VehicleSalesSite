@extends('layouts.adminbase')

@section('title', 'Add Car')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1> Add Car </h1>
            <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Car Elements</h4>
                        <p class="card-description">  </p>
                        <form class="forms-sample" action="{{route('admin.car.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class = "form-group">
                                    <label>Parent Category</label>
                                    <select class ="form-control select2" name="category_id" style="...">
                                        <option value = "0" select="selected">Main Car</option>
                                        @foreach($data as $rs)
                                            <option value="{{ $rs -> id }}"> {{ \App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs, $rs->title) }}</option>
                                        @endforeach
                                    </select>

                                </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Price</label>
                                <input type="number" class="form-control" name="price" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tax %</label>
                                <input type="number" class="form-control" name="tax" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Fuel</label>
                                <input type="text" class="form-control" name="fuel" placeholder="Fuel">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Year</label>
                                <input type="number" class="form-control" name="year" value="0" >
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">KM</label>
                                <input type="number" class="form-control" name="KM" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Color</label>
                                <input type="text" class="form-control" name="Color" placeholder="color">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Detail Inf.</label>
                                <textarea  class="form-control" id="detail" name="detail" >

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#detail' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class ="input-group">
                                    <div class="custom-file">
                                <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose image file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class = "input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control" name="status">
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>




            </div>
        </div>
        <!-- content-wrapper ends -->

@endsection
