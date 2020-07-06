<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Maps --}}
    <style> #map { 
        height: 100%; 
        width: 100%; 
        padding: 0; 
        margin: 0; } 
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.2/leaflet-src.js"></script>
    <script src="https://raruto.github.io/cdn/leaflet-google/0.0.3/leaflet-google.js"></script>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB3a7rHUjMfGys4UKLLSzaLGG6TjP9E3Jw"></script> --}}
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>


   <style>
       #mapid { height: 180px; }
   </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @role('Admin')
                            <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Usuários</a></li>
                            <li class="nav-item"><a href="{{ route('locations.index') }}" class="nav-link">Localizações</a></li>
                        @endrole
                        @auth
                            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Mapa</a></li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script>
        var map = new L.Map('map', {
            center: [41.4583, 12.7059],
            zoom: 5,
            markerZoomAnimation: false,
            zoomControl: false
        });
    
        var zoomControl = new L.Control.Zoom({ position: 'topright' });
    
        var ggl = new L.Google('SATELLITE'); // Possible types: SATELLITE, ROADMAP, HYBRID, TERRAIN
    
        var url = 'https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png',
            attr =
            'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
            otm = new L.TileLayer(url, {
            attribution: attr,
            /*subdomains:"1234"*/
            });
    
        var baseLayers = {
            "Google Map": ggl,
            "Leaflet Map": otm,
        };
    
        var layersControl = L.control.layers(baseLayers, null, { collapsed:false });
    
        layersControl.addTo(map);
        zoomControl.addTo(map);
    
        map.addLayer(ggl);
    </script>
</body>
</html>
