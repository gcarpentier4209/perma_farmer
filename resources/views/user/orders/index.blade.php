@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card left">
                    <div class="card-header">L'information du client et ses commandes</div>

                    <div class="card-body">
                        <div class="info-client">
                            <ul class="column">
                                <li class="label">id :</li>
                                <li class="label">Prénom :</li>
                                <li class="label">Nom :</li>
                                <li class="label">Telephone :</li>
                            </ul>
                            <ul>
                                <li class="value">{{$client->id}}</li>
                                <li class="value">{{$client->first_name}}</li>
                                <li class="value">{{$client->last_name}}</li>
                                <li class="value">{{$client->telephone}}</li>
                            </ul>
                        </div>

                        <table class="table table-striped">
                            <thead>
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Etat de la commande</th>
                                <th scope="col">Date de préparation</th>
                                <th scope="col">Date de retrait</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->status }}</td>
                                    <td>{{ $order->preparation_date }}</td>
                                    <td>{{ $order->removal_date }}</td>
                                    <td><a class="btn btn-primary" href="{{route('admin.show.order', $order->id)}}">Edit</a></td>
                                    <td>
                                        <form method="post" action="{{route('admin.delete.order', $order->id)}}">
                                            {{ csrf_field() }}
                                            <input type="submit" value="supprimer"" class="btn btn-danger" onclick='return confirm("Supprimer ?");'>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card right">
                    <div class="card-header">Messages</div>

                    <div class="card-body received-messages">Messages réçu par {{$client->first_name}} {{$client->last_name}}

                        <select size="1" name="message" class="dropdown1"/>
                        <option value="5">message 5</option>
                        <option value="4">message 4</option>
                        <option value="3">message 3</option>
                        <option value="2">message 2</option>
                        <option value="1">message 1</option>
                        </select>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ouvrir</button>

                        <!-- Modal -->
                        <div id="myModal" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Sujet de message</h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <!-- <a href="{{route('admin.show.order', $order->id)}}" class="btn btn-primary btn-sm">Ouvrir</a> -->

                    </div>

                    <div class="card-body send-message">
                        <form action="/action_page.php" id="usrform">
                            Sujet: <input type="text" name="sujet">
                            <textarea rows="4" cols="30" name="comment" form="usrform"></textarea>
                            <input type="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
