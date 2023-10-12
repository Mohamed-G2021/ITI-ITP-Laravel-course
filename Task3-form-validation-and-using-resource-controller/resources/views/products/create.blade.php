@extends('layouts.app')

@section('content')

<div class="container">
        <h1> Add new product</h1>

        <form method="post" action="{{route('products.store')}}">
                @csrf
                <div class="mb-3">

                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control">
                                @error('name')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <input class="form-control" name="description" value="{{old('description')}}" id="exampleFormControlTextarea1" rows="3"></input>
                                @error('description')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" value="{{old('image')}}" class="form-control">
                                @error('image')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" value="{{old('price')}}" class="form-control">
                                @error('price')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

@endsection