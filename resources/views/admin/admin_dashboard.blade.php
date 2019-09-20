@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header dashboard">Perma-Farmer</div>

                    <div class="card-body dashboard">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="">Sélectionner votre tache</p>
                        <br>
                        <a class="btn btn-primary" href="{{route('product')}}">Gérer les produits</a>
                        <br>
                        <a class="btn btn-primary" href="{{route('stock')}}">Gérer les stocks</a>
                        <br>
                        <a class="btn btn-primary" href="{{route('admin.clients')}}">Gérer les commandes</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
