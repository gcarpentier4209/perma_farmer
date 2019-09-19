@extends('layouts.app')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un stock</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('stocks.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">id_product</label>
                        <div class="control">
                            <input class="input @error('id_product') is-danger @enderror" type="text" name="id_product" value="{{ old('id_product') }}" placeholder="id du produit">
                        </div>
                        @error('id_product')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">stock_quantity</label>
                        <div class="control">
                            <input class="input" type="number" name="stock_quantity" value="{{ old('stock_quantity') }}" min="0" max="1000">
                        </div>
                        @error('stock_quantity')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="button is-link">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection