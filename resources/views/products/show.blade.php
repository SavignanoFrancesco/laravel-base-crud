@extends('layouts.app')

@section('content')

    <h1>{{$product->id}}</h1>

    <div class="">
        <span>Gender:</span>
        <span>{{$product->gender}}</span>
    </div>
    <div class="">
        <span>Type:</span>
        <span>{{$product->type}}</span>
    </div>
    <div class="">
        <span>Size:</span>
        <span>{{$product->size}}</span>
    </div>
    <div class="">
        <span>Color:</span>
        <span>{{$product->color}}</span>
    </div>
    <div class="">
        <span>Price:</span>
        <span>{{$product->price}}</span>
    </div>
@endsection
