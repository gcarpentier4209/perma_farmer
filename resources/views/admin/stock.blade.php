@extends('layouts.app')

@section('content')

    @if(session()->has('info'))
        <div class="notification is-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <header class="card-header">
            <h4 class="card-title">Stock des produits</h4>
{{--            <a class="btn btn-info" href="{{ route('stocks.create') }}">Ajouter un produit au stock</a>--}}
        </header>

        <table class="table table-striped">
            <thead>
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">libelle produit</th>
                <th scope="col">Stock produit</th>
                <th scope="col">Actions</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($stocks as $stock)
                <tr>
                    <td>{{ $stock->id }}</td>
{{--                    <td>{{ $stock->product->label }}</td>--}}
                    {{--            @php(dd($stock->product))--}}
                    {{--            <td><strong>{{ $stock->product()->label }}</strong></td>--}}
                    <td><strong>{{ $stock->stock_quantity }}</strong></td>
                    <td><a class="btn btn-primary" href="{{ route('stocks.show', $stock->id) }}">Voir</a></td>
                    <td><a class="btn btn-warning" href="{{ route('stocks.edit', $stock->id) }}">Modifier</a></td>
                    <td>
                        <form action="{{ route('stocks.destroy', $stock->id) }}" method="post">
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