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


                            <div class="order-status">
                                <form action='{{ route("admin.update.order", $order->id) }}' method='post'>
                                    {{ csrf_field() }}
                                    <input type='hidden' name='id' value='{{ $order->id }}'><br>

                                    <select size="1" name="status" class="dropdown1">
                                        <option value="A préparer">A préparer</option>
                                        <option value="Préparation en cours">Préparation en cours</option>
                                        <option value="Prêt à retirer">Prêt à retirer</option>
                                        <option value="Retiré">Retiré</option>
                                    </select>
                                    <input type='submit' class="btn btn-primary" value='Enregistrer'>
                                </form>

                                <div>La commande est prêt ?</div>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Notifier par SMS et Email</button>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
