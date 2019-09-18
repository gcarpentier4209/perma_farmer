@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">id_product</th>
        <th scope="col">stock_quantity</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($stocks as $stock)
        <tr>
            <td>{{ $stock->id }}</td>
            <td>{{ $stock->product->label }}</td>
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