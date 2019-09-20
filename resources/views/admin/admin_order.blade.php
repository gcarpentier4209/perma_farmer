@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Détail de la commande</div>

                    <div class="card-body">
                        <div class="commande">

                            <table class="table table-striped">
                                <thead>
                                <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Produit</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Check</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->label }}</td>
                                        <td>{{ $product->stock['stock_quantity']}}</td>
                                        <!-- <td>{{ $product->pivot->product_quantity }}</td> -->
                                        <td><input type="checkbox" id="horns" name="horns"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
                                    Etat de cette commande
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#"><span class="fa fa-life-ring"></span> Nageurs</a>
                                    <a class="dropdown-item" href="#"><span class="fa fa-wrench"></span> Mécaniciens</a>
                                    <a class="dropdown-item" href="#"><span class="fa fa-rocket"></span> Astronautes</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#"><span class="fa fa-bullhorn"></span> Autres témoignages</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
