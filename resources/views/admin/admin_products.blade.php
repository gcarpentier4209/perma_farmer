@extends('layouts.app')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Unité de ventes</th>
            <th scope="col">Unité</th>
            <th scope="col">Valeur</th>
            <th scope="col">Ajouter</th>

        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th>{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->sales_unit }}</td>
            <td>{{ $product->unit_id }}</td>
            <td>{{ $product->value }}</td>
            <td>Modifier / Supprimer</td>

        </tr>
        @endforeach

        </tbody>
    </table>
@endsection