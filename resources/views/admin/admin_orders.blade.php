@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card left">
                    <div class="card-header">L'information du client et ses commandes</div>

                    <div class="card-body">
                        <div class="info-client">
                            <ul>
                                <li class="label">id</li>
                                <li class="label">Prénom</li>
                                <li class="label">Nom</li>
                                <li class="label">Telephone</li>
                            </ul>
                            <ul>
                                <li>{{$client->id}}</li>
                                <li>{{$client->first_name}}</li>
                                <li>{{$client->last_name}}</li>
                                <li>{{$client->telephone}}</li>
                            </ul>
                        </div>
                        <div class="commandes">
                            <ul>
                            @foreach($orders as $order)
                                <li>{{$order->id}}</li>
                                <li>{{$order->status}}</li>
                                <li>{{$order->preparation_date}}</li>
                                <li>{{$order->removal_date}}</li>
                                <li><a href="{{route('admin.show.order', $order->id)}}" class="btn btn-primary btn-sm">Edit</a></li>
                                <li>
                                <form method="post" action="{{route('admin.delete.order', $order->id)}}">
                                    {{ csrf_field() }}
                                    <input type="submit" value="supprimer"" class="btn btn-danger btn-sm" onclick='return confirm("Supprimer ?");'>
                                </form>
                                <!-- <a href="{{route('admin.delete.order', $order->id)}}" class="btn btn-danger btn-sm btn-dell">Supprimer</a> -->
                                </li>
                            @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">

                <div class="card right">
                    <div class="card-header">Messages</div>

                    <div class="card-body">message
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
