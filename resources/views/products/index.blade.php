@extends('layouts.app')


@section('content')
    <h1>Products</h1>
    <a href="{{route('products.create')}}">[Aggiungi prodotto]</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Gender</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Color</th>
                    <th>Price</th>
                    <th>Azioni</th>
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
                    <td><a href="{{route('products.show',['product'=> $product->id])}}">Dettagli</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection
