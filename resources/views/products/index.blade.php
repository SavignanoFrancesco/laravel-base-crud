@extends('layouts.app')


@section('content')
    <h1>Products</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->gender}}</td>
                    <td>{{$product->type}}</td>
                    <td>{{$product->size}}</td>
                    <td>{{$product->color}}</td>
                    <td>{{$product->price}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

@endsection
