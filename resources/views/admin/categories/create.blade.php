@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Create Category</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="...">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="...">
        </div>
        <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
            <span class="input-group-text">Upload</span>
            </div>
        </div>
        </div>
        <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Status</label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </form>
</div>
@endsection
