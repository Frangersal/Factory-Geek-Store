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

    <!-- Styles Bootstrap 5 -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles FGStore -->
    <link href="{{ asset('css/FGStore/core.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FGStore/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FGStore/styleMain.css') }}" rel="stylesheet">
    <link href="{{ asset('css/FGStore/styleNav.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        
        
        <nav class="navbar navbar-expand-md navbar-light bg-nav-top shadow-sm sticky-top">
            <!-- bg-white -->
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="nav-logo" src="{{ asset('img/logo/FGStore_logo.png') }}"  alt="icono">
                    <img class="nav-logo-tiny" src="{{ asset('img/logo/FGStore_logo_tiny.png') }}"  alt="icono">
                </a> 

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     
                    <ul class="navbar-nav me-auto">

                    </ul>
 
                    <ul class="navbar-nav ms-auto">
                         
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item nav-button-perfil nav-button">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item nav-button-perfil nav-button">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        
                            <div class="input-group mb-3 cqlch nav-search-section">
                                <input type="text" class="nav-serch-bar" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn nav-serch-bar-buttton" type="button" id="button-addon2">
                                    <img class="nav-serch-bar-icon" src="{{ asset('img/icons/icons8-search-50.png') }}"  alt="icono">
                                </button>
                            </div> 
                            <div class=" cqlch ">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav-button-perfil nav-button" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <img class="nav-button-avatar" src="{{ asset('img/testpersonas/el_negro.jpg') }}"  alt="icono">    
                                        <span class="nav-button-text">
                                            {{ Auth::user()->name }}
                                        </span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </div>
                            
                            <div class="cqlch">
                                <button class="nav-button-perfil nav-button " >
                                    <img class="nav-button-avatar" src="{{ asset('img/icons/icons8-favorite-50.png') }}"  alt="icono">
                                    <span class="nav-button-text">
                                        Wishlist
                                    </span>
                                </button>
                            </div>
                            <div class="cqlch">
                                <button class="nav-button-perfil nav-button " >
                                    <img class="nav-button-avatar" src="{{ asset('img/icons/icons8-shopping-cart-30.png') }}"  alt="icono">
                                    <span class="nav-button-text">
                                        Carrito
                                    </span>
                                </button>
                            </div>
                        @endguest
                    </ul>
                </div>
                <!-- -->
<!-- 
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     
                    <ul class="navbar-nav me-auto">

                    </ul>
 
                    <ul class="navbar-nav ms-auto">
                         
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div> -->
            </div>
        </nav>

        <!-- <main class="py-4"> -->
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
