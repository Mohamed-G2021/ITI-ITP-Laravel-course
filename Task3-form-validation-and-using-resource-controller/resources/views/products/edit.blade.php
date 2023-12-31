@extends('layouts.app')

@section('content')
<div class="container">
        <h1> Edit {{$product->name}}</h1>

        <form method="post" action="{{route('products.update',$product->id)}}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{$product->name}}" class="form-control">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <input class="form-control" name="description" value="{{$product->description}}" id="exampleFormControlTextarea1" rows="3"></input>
                        <br>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" value="{{$product->image}}" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" value="{{$product->price}}" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label for="form-labe">Category</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                        <option selected value="{{$product->category->id?? '' }}">{{$product->category->name?? "" }}</option>
                                        @foreach($categories as $category)
                                        @if($product->category_id == $category->id)
                                        @else
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                        @endforeach
                                </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
        </form>

</div>
@endsection