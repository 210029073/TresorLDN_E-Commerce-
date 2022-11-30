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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="{{asset("js/menu.js")}}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <?php
    //session_start();
    //header("url=route('home')");
    use App\Http\Controllers\HomeController;
    HomeController::generateCookie();
    //dd($_COOKIE)
    ?>
    <?php 
        use \App\Http\Controllers\BasketCollectionController;
        $cart = new BasketCollectionController();
        $quantityInCart = $cart->size();
    ?>
    <div id="app">
        <div class="navBarContainer">
            <div class="navBarLogo">
                <a href="{{ url('/') }}">
                    <!-- {{--                    {{ config('app.name', 'Laravel') }}--}} -->
                    <img src="{{asset("svg/logo-no-background.svg")}}" width="175" height="35" />
                </a>
            </div>

            <div class="navBarMenu">
                <div class="megaMenu">
                    <span>Menu</span>
                    <div class="megaMenuContent">
                        <div class="megaMenuColumn">
                            <strong>&#127968; Return Home</strong>
                            <div class="megaMenuRow">
                                <a href="{{route('main')}}">Go to Homepage</a>
                            </div>
                        </div>
                        <div class="megaMenuColumn">
                            <strong><i class="fas">&#xf02b;</i> View Our Products</strong>
                            <div class="megaMenuRow">
                                <a href="{{route('products')}}">View All Products</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('chairs')}}">View Chairs</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('sofas')}}">View Sofas</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('beds')}}">View Beds</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('tables')}}">View Tables/Desks</a>
                            </div>
                        </div>
                        <div class="megaMenuColumn">
                            <strong><i class="fas">&#xf05a;</i> About TresorLDN</strong>
                            <div class="megaMenuRow">
                                <a href="{{route('about')}}">About Us</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('contact')}}">Contact Us</a>
                            </div>
                            <div class="megaMenuRow">
                                <a href="{{route('review')}}">Review Us</a>
                            </div>
                        </div>
                        <div class="megaMenuRow">
                            <a href="{{route('privacy')}}">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navBarSearch">
                <div class="searchBarContainer">
                    <form class="searchForm" method="POST" action="{{route('search')}}">
                        @csrf
                        <input type="text" placeholder="Enter a search" name="searchTarget" />
                        <button type="submit">Search</button>
                    </form>
                </div>
            </div>
            <div class="navBarLogin">
                @guest
                @if (Route::has('login'))
                <div class="navBarLoginOptions">
                    <a href="{{route('login')}}">Login</a>
                </div>
                @endif

                @if (Route::has('register'))
                <div class="navBarLoginOptions">
                    <a href="{{route('register')}}">Register</a>
                </div>
                @endif
                @else
                <div class="navBarLoginOptions"><a href="{{route('basket')}}"><i class="fa fa-shopping-cart"></i> Basket ({{$quantityInCart}})</a></div>
                <div class="navBarLoginOptions"><a href="{{route('pastOrders')}}">Past Orders</a></div>
                @if (\Illuminate\Support\Facades\Auth::user()->isAdmin == 1)
                <div class="navBarLoginOptions">
                    <a href="{{route('admin')}}"><i class="fas fa-user-shield"></i> Admin</a>
                </div>
                @endif

                <div class="navBarLoginOption">
                    <i class="fa">&#xf007;</i> {{Auth::user()->user_first_name }}
                    <div class="navBarUserSettings">
                        <a class="navBarUserSettings" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i style='font-size:16px' class='fas'>&#xf52b;</i> {{ __('Logout') }}
                        
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>
            {{-- Mobile view part of the webpage --}}
            <div id="menuBtn" class="menuScreenBtn" onclick="showMenu()">
                <strong>&#9776;</strong>
            </div>
        </div>
    </div>
    {{-- Mobile view of navigational bar --}}
    <div id="menu" class="menuScreen">
    <div id="showSearch" class="menuScreenSearch">
        <div class="navBarSearch">
            <div class="searchBarContainer">
                <form class="searchForm" method="POST" action="{{route('search')}}">
                    @csrf
                    <input type="text" placeholder="Enter a search" name="searchTarget" />
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
        <!-- <div class="megaMenuContent"> -->
        <div id="test" class="megaMenuColumn">
            <strong>&#127968; Return Home</strong>
            <div class="megaMenuRow">
                <a href="{{route('main')}}">Go to Homepage</a>
            </div>
        </div>
        {{-- Links to webpages --}}
        <div class="megaMenuColumn">
            <strong><i class="fas">&#xf02b;</i> View Our Products</strong>
            <div class="megaMenuRow">
                <a href="{{route('products')}}">View All Products</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('chairs')}}">View Chairs</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('sofas')}}">View Sofas</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('beds')}}">View Beds</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('tables')}}">View Tables/Desks</a>
            </div>
        </div>
        <div class="megaMenuColumn">
            <strong><i class="fas">&#xf05a;</i> About TresorLDN</strong>
            <div class="megaMenuRow">
                <a href="{{route('about')}}">About Us</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('contact')}}">Contact Us</a>
            </div>
            <div class="megaMenuRow">
                <a href="{{route('review')}}">Review Us</a>
            </div>
        </div>
        <div class="megaMenuColumn">
            <strong><i class="fas">&#xf05a;</i> Account</strong>
            @guest
            @if (Route::has('login'))
            <div class="megaMenuRow">
                <a href="{{route('login')}}">Login</a>
            </div>
            @endif

            @if (Route::has('register'))
            <div class="megaMenuRow">
                <a href="{{route('register')}}">Register</a>
            </div>
            @endif
            @else
            <div class="megaMenuRow"><a href="{{route('basket')}}"><i class="fa fa-shopping-cart"></i> Basket ({{$quantityInCart}})</a></div>
            <div class="megaMenuRow"><a href="{{route('pastOrders')}}">Past Orders</a></div>
            @if (\Illuminate\Support\Facades\Auth::user()->isAdmin == 1)
            <div class="megaMenuRow">
                <a href="{{route('admin')}}"><i class="fas fa-user-shield"></i> Admin</a>
            </div>
            @endif
            
            <div class="megaMenuRow">
                <i class="fa fa-user"></i><span> {{Auth::user()->user_first_name}}</span>
            </div>
            <div class="megaMenuRow">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                    <i style='font-size:16px' class='fas'>&#xf52b;</i> {{ __('Logout') }}
                
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            @endguest
            <!-- <strong><i class="fas">&#xf05a;</i> About TresorLDN</strong>
                <div class="megaMenuRow">
                    <a href="{{route('about')}}">About Us</a>
                </div>
                <div class="megaMenuRow">
                    <a href="{{route('contact')}}">Contact Us</a>
                </div>
                <div class="megaMenuRow">
                    <a href="{{route('review')}}">Review Us</a>
                </div> -->
        </div>
    </div>
    </div>
    </div>
    <main class="superContainer">
        @yield('content')
    </main>
    </div>

    <footer class="footer">
        <br />
        <br />
        <span>
            <center>Copyright 2022 TresorLDN Limited Company</center>
        </span>
        <br />
        <span>
            <center>TresorLDN a limited company that advertises and sells various
                homeware products for all customers and businesses.
            </center>
        </span>
        <span>
            <center>Providing customer satisfaction
                by selling products that can be tailored to meet the customers needs.
            </center>
        </span>
        <br />
        <span>
            <center>Our website is powered by Laravel a PHP Framework created by <a href="https://github.com/taylorotwell">Taylor Otwell</a></center>
        </span>
        <br />
        <span>
            <center>
                <img src="{{asset("svg/logo-no-background.svg")}}" width="250" height="35" />
            </center>
        </span>
        <br />
        <br />
        <br />
        <br />
    </footer>
</body>

</html>