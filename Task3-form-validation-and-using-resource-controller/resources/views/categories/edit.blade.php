@extends('layouts.app')

@section('content')
<div class="container">
        <h1> edit {{$category->name}}</h1>

        <form method="post" action="{{route('categories.update', $category->id)}}">
                @csrf
                @method('put')
                <div class="mb-3">

                        <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" name="name" value="{{old('name') ?? $category->name}}" class="form-control">
                                @error('name')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <input class="form-control" name="description" value="{{$category->description}}" id="exampleFormControlTextarea1" rows="3"></input>
                                @error('description')
                                <div class=" text-danger fw-bold">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Image</label>
                                <input type="file" class="form-control" name="image" value="{{old('image')}}" id="exampleFormControlTextarea1" rows="3"></input>
                        </div>

                        <button type="submit" class="btn btn-primary">update</button>
        </form>
</div>

@endsection