@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Categories</h1>
        <br>
        <a href="{{route('categories.create')}}" class="btn btn-primary">Add new category</a>
        <br><br>
        <table class="table">
                <thead>
                        <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Show</th>
                                <th>Edit</th>
                                <th>Delete</th>
                        </tr>
                </thead>

                <tbody>
                        @foreach($categories as $category)

                        <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td> <img src="{{ asset("images/$category->image")}}" class="card-img-top" height="200" style="object-fit: contain;"> </td>
                                <td><a href="{{route('categories.show',$category->id)}}" class="btn btn-primary">show</a></td>
                                <td><a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">edit</a></td>
                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <td> <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger"></td>
                                </form>

                        </tr>
                        @endforeach

                </tbody>
        </table>
</div>
@endsection('content')