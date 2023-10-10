@extends('layouts.app')

@section('content')

<div class="container">
        <h1>{{$product->name}} details</h1>

        <div class="card" style="width: 18rem; ">
                <img src="{{asset("/images/$product->image")}}" class="card-img-top" height="250" style="object-fit: contain;">
                <div class="card-body">
                        <h5 class="card-title">name: {{$product->name}}</h5>
                        <h5 class="card-title">description: {{$product->description}}</h5>
                        <h5 class="card-title">price: {{$product->price}}</h5>
                </div>
        </div>
        <br>
        <a href="{{route('products.index')}}" class="btn btn-primary">back to all products</a>

</div>
@endsection