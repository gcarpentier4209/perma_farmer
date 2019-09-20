@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Liste des clients</div>

                    <div class="card-body list-clients">
                        <ul class="header">
                            <li>ID</li>
                            <li>Nom</li>
                            <li>Prénom</li>
                            <li>Etat de commande</li>
                            <li>Voir sa commande</li>
                        </ul>
                        @foreach($clients as $client)
                        <ul class="child">
                            <li>{{ $client->id}}</li>
                            <li>{{ $client->first_name}}</li>
                            <li>{{ $client->last_name}}</li>
                            <li>A préparer</li>
                            <li><a href="{{route('admin.show.orders', $client->id)}}" class="btn btn-primary btn-sm">Voir</a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
