@extends('layouts.app')

@section('content')
<div class="">
    <h1>Inserisci nuovo prodotto(riga della tabella products)</h1>
    <form action="{{route('products.store')}}" method="post">

        @csrf{{-- token --}}
        <div class="">
            <label>Genere</label>
            <input type="text" name="gender">
        </div>
        <div class="">
            <label>Tipo di prodotto</label>
            <input type="text" name="type">
        </div>
        <div class="">
            <label>Misura</label>
            <input type="text" name="size">
        </div>
        <div class="">
            <label>Colore</label>
            <input type="text" name="color">
        </div>
        <div class="">
            <label>Prezzo</label>
            <input type="number" step="0.01" name="price">
        </div>
        <div class="">
            <button type="submit">Salva prodotto</button>
        </div>
    </form>
</div>
@endsection
