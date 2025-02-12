@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">Edit Product</h3>
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
    <form method="POST" action="{{route('product.update', [$product->id])}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$product->title}}" placeholder="...">
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
        <label for="exampleInputFile">File input</label>
        <div class="input-group">
            <div class="custom-file">
            <input type="file" class="form-control-file" id="exampleInputFile" name="image">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
            <div class="input-group-append">
            <span class="input-group-text">Upload</span>
            </div>
        </div>
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="{{$product->price}}" placeholder="...">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$product->description}}" placeholder="...">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
        <select class="form-control" name="category_id">
            @foreach ($category as $key => $cate)
                <option value="{{$cate->id}}" {{$cate->id == $product->category_id ? 'selected' : ''}}>{{$cate->title}}</option>
            @endforeach
        </select>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>
@endsection
