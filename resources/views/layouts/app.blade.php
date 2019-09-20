<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'perma farmer') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.nav')

        {{--//////////////////////////////////////////////////////////////////////////////////////--}}
        {{--//////////////////////////////////////////////////////////////////////////////////////--}}
        {{--//////////////////////////////////////////////////////////////////////////////////////--}}
        <div class="p-2" style="position: fixed; background-color: orange; margin-top: 80px">
            <h5>Liens provisoire ADMIN</h5>
            <ul>
                <li><a class="nav-link" href="{{ route('product') }}">voir les produits</a></li>
                <li><a class="nav-link" href="{{ route('stock') }}">voir le stock</a></li>
                <li><a class="nav-link" href="{{ route('admin.clients') }}">voir les clients</a></li>
            </ul>
            <h5>Liens provisoire USER</h5>
            <ul>
                <li><a class="nav-link" href="#">lien 1</a></li>
            </ul>
        </div>
        {{--//////////////////////////////////////////////////////////////////////////////////////--}}
        {{--//////////////////////////////////////////////////////////////////////////////////////--}}
        {{--//////////////////////////////////////////////////////////////////////////////////////--}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Custom scripts for this template -->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
