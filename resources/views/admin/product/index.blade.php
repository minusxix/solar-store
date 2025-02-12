@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">List Product</h3>
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
    <table class="table table-hover" id="myTable">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
            <th scope="col">Category</th>
            <th scope="col">Date</th>
            <th scope="col">Update</th>
            <th scope="col">Manage</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $key => $prod)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$prod->title}}</td>
            <td><img src="{{asset('up/prod/' . $prod->image)}}"></td>
            <td>VND {{number_format($prod->price, 0, ',', '.')}}</td>
            <td>{{$prod->description}}</td>
            <td>{{$prod->category->title}}</td>
            <td>{{$prod->created_at}}</td>
            <td>{{$prod->update_at}}</td>
            <td>
                <a href="{{route('product.edit', [$prod->id])}}" class="btn btn-warning">Edit</a>
                <form onsubmit="return confirm('Are you sure?');" action="{{route('product.destroy', [$prod->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>
@endsection
