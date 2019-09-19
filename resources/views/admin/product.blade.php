@extends('layouts.app')

@section('content')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <a class="btn btn-info" href="{{ route('products.create') }}">Ajouter un produit</a>
        </header>

        <table class="table table-striped">
            <thead>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">libelle produit</th>
                <th scope="col">unite de vente</th>
                <th scope="col">poids (en kilogramme)</th>
                <th scope="col">Actions</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td><strong>{{ $product->label }}</td>
                    <td><strong>{{ $product->sales_unit }}<strong></td>
                    <td><strong>{{ $product->weight }}</strong></td>
{{--                    <td><a class="btn btn-primary" href="{{ route('products.show', $product->id) }}">Voir</a></td>--}}
                    <td><a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Modifier</a></td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
@endsection