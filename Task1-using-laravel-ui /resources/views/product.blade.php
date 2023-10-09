@extends('layouts.app')

@section('content')
<table class="table container">
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <tr>
                <td>{{$product['id']}}</td>
                <td>{{$product['name']}}</td>
                <td><img src="{{asset($product['image'])}}" alt="" srcset=""></td>
                <td>{{$product['price']}}</td>

        </tr>
</table>
@endsection('content')