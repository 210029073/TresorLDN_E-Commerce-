<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>

<body>
<?php
    //session_start();
    header("url=route('home')");
    use App\Http\Controllers\HomeController;
    
    HomeController::generateCookie();
    
    //dd($_COOKIE)
    ?>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
{{--                    {{ config('app.name', 'Laravel') }}--}}
                    <img src="{{asset("svg/logo-no-background.svg")}}" width="175" height="35"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
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
                                    {{ Auth::user()->user_first_name }} {{Auth::user()->user_last_name}}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('basket')}}">
                                    My Basket
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{route('pastOrders')}}">
                                    View Past Orders
                                </a>
                            </li>
                            @if(\Illuminate\Support\Facades\Auth::user()->isAdmin == 1)
                                <li>
                                    <a class="nav-link" href="{{route('admin')}}">
                                        Admin View
                                    </a>
                                </li>
                            @endif
                            @if(\Illuminate\Support\Facades\Auth::user()->user_status == 'online')
                                <li>
                                    <a class="nav-link">Online</a>
                                </li>
                            @endif
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <footer class="footer">
        <span>@Copyright 2022 TresorLDN Limited Company</span>
    </footer>
</body>
</html>
