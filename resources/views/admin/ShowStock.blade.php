@extends('layouts.app')
@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Produit : {{ $stock->id_product }}</p>
        </header>
        <div class="card-content">
            <div class="content">
                <p>reference produit : {{$stock->id_product }}</p>
                <hr>
                <p>{{ $stock->stock_quantity }}</p>
            </div>
        </div>
    </div>
@endsection