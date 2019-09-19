@extends('layouts.app')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un stock produit</p>
        </header>

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


        <div class="card-content">
            <div class="content">
                <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
                    @csrf
                    @method('put')
{{--                    <div class="field">--}}
{{--                        <label class="label">Libelle</label>--}}
{{--                        <div class="control">--}}
{{--                            <input class="input @error('label') is-danger @enderror" type="text" name="label" value="{{ old('label' , $product->label) }}" placeholder="Libelle du produit">--}}
{{--                        </div>--}}
{{--                        @error('label')--}}
{{--                        <p class="help is-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="field">--}}
{{--                        <label class="label">sales_unit</label>--}}
{{--                        <div class="control">--}}
{{--                            <input class="input @error('sales_unit') is-danger @enderror" type="text" name="sales_unit" value="{{ old('sales_unit', $product->sales_unit) }}" placeholder="unité de vente">--}}
{{--                        </div>--}}
{{--                        @error('sales_unit')--}}
{{--                        <p class="help is-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="field">
                        <label class="label">quantité présente</label>
                        <div class="control">
                            <input class="input" type="number" name="stock_quantity" value="{{ old('stock_quantity', $stock->stock_quantity) }}" min="0" max="1000">
                        </div>
                        @error('stock_quantity')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Modifier</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection