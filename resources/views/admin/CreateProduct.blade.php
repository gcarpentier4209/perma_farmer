@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
            <div class="card">
                <header class="card-header">
                    <h5 class="card-title">Création d'un produit</h5>
                </header>

                <div class="card-content">
                    <div class="content">
                        <form action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="field">
                                <label class="label">Libellé du produit</label>
                                <div class="control">
                                    <input class="input @error('label') is-danger @enderror" type="text" name="label"
                                           value="{{ old('label') }}" placeholder="nom du produit">
                                </div>
                                @error('label')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field">
                                <label class="label">unité de vente / conditionnement</label>
                                <div class="control">
                                    <input class="input @error('sales_unit') is-danger @enderror" type="text"
                                           name="sales_unit" value="{{ old('sales_unit') }}"
                                           placeholder="unité de vente">
                                </div>
                                @error('sales_unit')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field">
                                <label for="label">Equivalent poids en kilogramme</label>
                                <div class="control">
                                    <input class="input" type="float" name="weight" value="{{ old('weight') }}" min="0"
                                           max="1000">
                                </div>
                                @error('weight')
                                <p class="help is-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="field text-md-center">
                                <div class="control">
                                    <button class="btn btn-success">Créer le produit</button>
                                    <a href="{{ route('product') }}" class="btn btn-info" >annuler</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection