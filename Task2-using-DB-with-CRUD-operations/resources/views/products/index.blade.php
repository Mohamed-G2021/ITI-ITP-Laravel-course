@extends('layouts.app')

@section('content')


<div class="container">
        <a href="{{route('products.create')}}" class="btn btn-primary">Add new product</a>
        <br><br>
        <div class="row row-cols-1 row-cols-md-4 g-4">
                @foreach ($products as $product)
                <div class="col">
                        <div class="card col" style="width: 18rem; ">
                                <img src="{{asset("/images/$product->image")}}" class="card-img-top" height="250" style="object-fit: contain;">
                                <div class="card-body">
                                        <h5 class="card-title">{{$product->name}}</h5>
                                        <a href="{{route('products.show',$product->id)}}" class="btn btn-primary">details</a>
                                        <a href="{{route('products.destroy',$product->id)}}" onclick="return confirm('Are you sure you want to delete this product?')" class="btn btn-danger">delete</a>
                                </div>
                        </div>
                </div>
                @endforeach
        </div>
</div>

@endsection('content')