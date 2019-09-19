@extends('layouts.app')
@section('content')
{{--    <div class="card">--}}
{{--        <header class="card-header">--}}
{{--            <p class="card-header-title">Produit : {{ $stock->product->label }}</p>--}}
{{--        </header>--}}
{{--        <div class="card-content">--}}
{{--            <div class="content">--}}
{{--                <p>reference produit : {{$stock->id_product }}</p>--}}
{{--                <hr>--}}
{{--                <p>{{ $stock->stock_quantity }}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="card">
        <div class="card-header">
            Produit : {{ $stock->product->label }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $stock->product->label }}</h5>
            <p class="card-text">
            <p>reference produit: {{$stock->id_product }}</p>
            <hr>
            <p>quantité présente: {{ $stock->stock_quantity }}</p>
            </p>
            <a href="{{ route('stocks.index', $stock->id) }}" class="btn btn-primary">retour au stock</a>
        </div>
    </div>


@endsection