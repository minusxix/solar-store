@extends('layouts.app')
@section('content')
<div class="card card-primary">
    <div class="card-header">
    <h3 class="card-title">List Category</h3>
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
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Update</th>
            <th scope="col">Status</th>
            <th scope="col">Manage</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($category as $key => $cate)
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$cate->title}}</td>
            <td>{{$cate->description}}</td>
            <td>{{$cate->created_at}}</td>
            <td>{{$cate->update_at}}</td>
            <td>
                @if($cate->status == 1)
                    <span>Active</span>
                @else
                    <span>Unactive</span>
                @endif
            </td>
            <td>
                <a href="{{route('categories.edit', [$cate->id])}}" class="btn btn-warning">Edit</a>
                <form onsubmit="return confirm('Are you sure?');" action="{{route('categories.destroy', [$cate->id])}}" method="POST">
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
