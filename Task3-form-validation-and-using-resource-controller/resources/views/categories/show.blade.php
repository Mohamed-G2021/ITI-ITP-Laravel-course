@extends('layouts.app')

@section('content')
@dump($category->image);
<div class="container">
        <h1>{{$category->name}} category details</h1>

        <div class="card" style="width: 18rem; ">
                <div class="card-body">
                        <img src="{{ asset("storage/$category->image")}}" class="card-img-top" height="200" style="object-fit: contain;">
                        <h5 class="card-title">Name: {{$category->name}}</h5>
                        <h5 class="card-title">Description: {{$category->description}}</h5>
                        <h5 class="card-title">Created at: {{$category->created_at}}</h5>
                        <h5 class="card-title">Updated at: {{$category->updated_at}}</h5>
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">Edit</a>

                        <br><br>
                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" onclick="return confirm('Are you sure you want to delete this category?')" class="btn btn-danger">
                        </form>

                </div>
        </div>
        <br>

        @if(count($category->product)>0)
        <h2>Products in {{$category->name}} category</h2>
        @endif

        <ul class="list-group">
                @foreach($category->product as $product)
                <li class="list-group-item">
                        <a href="{{route('products.show' ,$product->id)}}">{{$product->name}}</a>
                </li>
                @endforeach
        </ul>

        <br>
        <a href="{{route('categories.index')}}" class="btn btn-primary">back to all categories</a>

</div>
@endsection