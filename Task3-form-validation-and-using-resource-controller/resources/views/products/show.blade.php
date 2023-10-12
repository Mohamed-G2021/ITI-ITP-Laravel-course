@extends('layouts.app')

@section('content')

<div class="container">
        <h1>{{$product->name}} details</h1>

        <div class="card" style="width: 18rem; ">
                <img src="{{asset("/images/$product->image")}}" class="card-img-top" height="250" style="object-fit: contain;">
                <div class="card-body">
                        <h5 class="card-title">Name: {{$product->name}}</h5>
                        <h5 class="card-title">Description: {{$product->description}}</h5>
                        <h5 class="card-title">Price: {{$product->price}}</h5>
                        <h5 class="card-title">Category: <a href="{{route('categories.show',$product->category->id?? '')}}">{{$product->category->name ?? ""}}</a></h5>
                        <a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('products.destroy',$product->id)}}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">Delete</a>
                </div>
        </div>
        <br>
        <a href="{{route('products.index')}}" class="btn btn-primary">back to all products</a>

</div>
@endsection