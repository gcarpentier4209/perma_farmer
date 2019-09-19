@extends('layouts.app')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Modification d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="field">
                        <label class="label">Libelle</label>
                        <div class="control">
                            <input class="input @error('label') is-danger @enderror" type="text" name="label" value="{{ old('label' , $product->label) }}" placeholder="Libelle du produit">
                        </div>
                        @error('label')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">sales_unit</label>
                        <div class="control">
                            <input class="input @error('sales_unit') is-danger @enderror" type="text" name="sales_unit" value="{{ old('sales_unit', $product->sales_unit) }}" placeholder="unité de vente">
                        </div>
                        @error('sales_unit')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">equivalent poids en kilogramme</label>
                        <div class="control">
                            <input class="input" type="float" name="weight" value="{{ old('weight', $product->weight) }}" min="0" max="1000">
                        </div>
                        @error('weight')
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