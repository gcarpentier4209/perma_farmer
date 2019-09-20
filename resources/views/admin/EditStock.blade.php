@extends('layouts.app')

@section('content')

    <h3>Mise à jour du stock</h3>

    <div class="card">
        <header class="card-header">
            <h4>Produit : {{ $stock->product->label }}</h4>
        </header>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
                    @csrf
                    @method('put')


                    <h5 class="card-title">{{ $stock->product->label }}</h5>
                    <p class="card-text">
                    <p>réference produit: {{$stock->id_product }}</p>
                    <hr>
                    <p>stock présent: {{ $stock->stock_quantity }}</p>
                    </p>

                    <div class="field">
                        <label class="label">stock à modifier</label>
                        <div class="control">
                            <input class="input" type="number" name="stock_quantity"
                                   value="{{ old('stock_quantity', $stock->stock_quantity) }}" min="0" max="1000">
                        </div>
                        @error('stock_quantity')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field text-md-center">
                        <div class="control">
                            <button class="btn btn-success">Modifier</button>
                            <a href="{{ route('stock') }}" class="btn btn-info">annuler</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>


    </div>
@endsection