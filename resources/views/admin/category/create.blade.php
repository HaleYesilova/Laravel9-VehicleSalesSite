@extends('layouts.adminbase')

@section('title', 'Add Category')


@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <h1> Add Category </h1>
            <div class="row">

            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Elements</h4>
                        <p class="card-description">  </p>
                        <form class="forms-sample" action="/admin/category/store" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
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
