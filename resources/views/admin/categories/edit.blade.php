@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit Category</h3>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" action="{{route('categories.update', [$category->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$category->title}}" placeholder="...">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$category->description}}" placeholder="...">
        </div>
        <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="form-control-file" id="exampleInputFile" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
        </div>
        </div>
        <div class="form-check">
        <input type="checkbox" value="1" class="form-check-input" id="exampleCheck1" name="status" {{$category->status == 1 ? 'checked' : ''}}>
        <label class="form-check-label" for="exampleCheck1">Status</label>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
@endsection
