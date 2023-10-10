@extends('layouts.app')

@section('content')
<div class="container">
        <h1> Add new product</h1>

        <form method="post" action="{{route('products.store')}}">
                @csrf
                <div class="mb-3">

                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" class="form-control">
                        </div>
                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <br>
                        <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="text" name="image" class="form-control">
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" name="price" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
</div>

@endsection