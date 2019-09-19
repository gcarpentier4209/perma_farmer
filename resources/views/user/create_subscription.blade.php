@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Abonnement</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store.subscription') }}">
                            @csrf

                            {{--LAST NAME--}}
                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Prénom</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                           class="form-control @error('last_name') is-invalid @enderror"
                                           name="last_name" value="{{ $user->last_name }}" required
                                           autocomplete="last_name" autofocus>

                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--FIRST NAME--}}
                            <div class="form-group row">
                                <label for="first_name" class="col-md-4 col-form-label text-md-right">Nom</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="first_name" value="{{ $user->first_name }}" required
                                           autocomplete="first_name" autofocus>

                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--FIRST NAME--}}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Courriel</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ $user->email }}" required
                                           autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            {{--TELEPHONE--}}
                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">Telephone</label>

                                <div class="col-md-6">
                                    <input id="telephone" type="tel"
                                           class="form-control @error('telephone') is-invalid @enderror"
                                           name="telephone" value="{{ $user->telephone }}" required
                                           autocomplete="telephone" autofocus>

                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            {{--BASKET CHOICE --}}
                            {{--todo catch basket in database --}}

                            <div class="form-group row">
                                <label for="basket_choice" class="col-md-4 col-form-label text-md-right">Choix du panier</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="basket_choice">
                                        <option value="1">Petit panier</option>
                                        <option value="2">Grand panier</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox"
                                               name="accept_reception_notification" id="accept_reception_notification"
                                               required>

                                        <label class="form-check-label" for="accept_reception_notification">
                                            Recevoir les notifications Email quand la livraison est prête
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Je m'abonne
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
