@extends('layouts.app')

@section('content')
    <div class="card">
        <header class="card-header">
            <p class="card-header-title">Création d'un produit</p>
        </header>
        <div class="card-content">
            <div class="content">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf
                    <div class="field">
                        <label class="label">Libelle</label>
                        <div class="control">
                            <input class="input @error('label') is-danger @enderror" type="text" name="label" value="{{ old('label') }}" placeholder="Libelle du produit">
                        </div>
                        @error('label')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">sales_unit</label>
                        <div class="control">
                            <input class="input @error('sales_unit') is-danger @enderror" type="text" name="sales_unit" value="{{ old('sales_unit') }}" placeholder="unité de vente">
                        </div>
                        @error('sales_unit')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <label class="label">equivalent poids en kilogramme</label>
                        <div class="control">
                            <input class="input" type="number" name="weight" value="{{ old('weight') }}" min="0" max="1000">
                        </div>
                        @error('weight')
                        <p class="help is-danger">{{ $message }}</p>
                        @enderror
                    </div>
{{--                    <div class="field">--}}
{{--                        <label class="label">Description</label>--}}
{{--                        <div class="control">--}}
{{--                            <textarea class="textarea" name="description" placeholder="Description du film">{{ old('description') }}</textarea>--}}
{{--                        </div>--}}
{{--                        @error('description')--}}
{{--                        <p class="help is-danger">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
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