@extends('layouts.app')



@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $stock->product->label }}</h5>
                        <p class="card-text">
                        <p>reference produit: {{$stock->id_product }} - {{ $stock->product->label }}</p>
                        <hr>
                        <p>quantité présente: {{ $stock->stock_quantity }}</p>
                        </p>
                        <p class="card-text">
                        <a href="{{ route('stock') }}" class="btn btn-primary" >retour au stock</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection