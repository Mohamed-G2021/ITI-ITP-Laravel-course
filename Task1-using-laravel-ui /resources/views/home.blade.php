@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-4 g-4">
        @foreach($products as $product)
        <div class="col">
            <div class="card col" style="width: 18rem; ">
                <img src="{{asset($product['image'])}}" class="card-img-top" height="250" style="object-fit: contain;">
                <div class="card-body">
                    <h5 class="card-title">{{$product['name']}}</h5>
                    <a href="/products/{{$product['id']}}" class="btn btn-primary">details</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection