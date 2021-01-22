@extends('layouts.app')

@section('content')

    <h1 class="mt-4 mb-4">Edit product id={{$product->id}}</h1>
    <form id="form" method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
        @csrf
        @method('PUT')
        <div class="">
            <label>Genere</label>
            <input type="text" name="gender" value="{{ $product->gender }}">
        </div>
        <div class="">
            <label>Tipo di prodotto</label>
            <input type="text" name="type" value="{{ $product->type }}">
        </div>
        <div class="">
            <label>Misura</label>
            <input type="text" name="size" value="{{ $product->size }}">
        </div>
        <div class="">
            <label>Colore</label>
            <input type="text" name="color" value="{{ $product->color }}">
        </div>
        <div class="">
            <label>Prezzo</label>
            <input type="number" step="0.01" name="price" value="{{ $product->price }}">
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-success">
                Update product
            </button>
        </div>
    </form>

@endsection
