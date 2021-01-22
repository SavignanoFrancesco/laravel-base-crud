@extends('layouts.app')


@section('content')
    <h1>Products</h1>
    <a href="{{route('products.create')}}">[Aggiungi prodotto]</a>
        <table id='table'>
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
                    <td id="actions">
                        <a href="{{route('products.show',['product'=> $product->id])}}">Show</a>
                        <a href="{{ route('products.edit', ['product' => $product->id]) }}" class="btn btn-warning">
                                     Edit
                                  </a>
                        <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit">
                                           Destroy
                                       </button>
                                   </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


@endsection
