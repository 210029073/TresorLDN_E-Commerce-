@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{asset("css/main.css")}}"/>
    
</head>

@section('content')
    <div class="banner">
        <div class="row-cols-md-1 justify-content-center">
            <img class="img" src="{{asset('jpg/homepage.jpg')}}"/>
        </div>
    </div>
    <!-- The vertical navigation bar -->
    <div class="parentMainContainer">
        <div class="mainNavBarContainer">
            @if(\Illuminate\Support\Facades\Auth::check())
                <h2 class="active">Welcome Back, {{\Illuminate\Support\Facades\Auth::user()->user_first_name}}</h2>
            @endif
            <div class="navbar-link"><a class="active" href="{{route('main')}}">Home</a></div>
            <div class="navbar-link"><a href="{{route('products')}}">Products</a></div>
            <div class="navbar-sublink"><a href="{{route('chairs')}}"><span>Chairs</span></a></div>
            <div class="navbar-sublink"><a href="{{route('tables')}}"><span>Tables</span></a></div>
            <div class="navbar-sublink"><a href="{{route('beds')}}"><span>Beds</span></a></div>
            <div class="navbar-sublink"><a href="{{route('sofas')}}"><span>Sofas</span></a></div>
            <div class="navbar-link"><a href="{{route('about')}}">About Us</a></div>
            <div class="navbar-link"><a href="{{route('contact')}}">Contact Us</a></div>
            <div class="navbar-link"><a href="{{route('pastOrders')}}">View your Past Orders</a></div>
            <div class="navbar-link"><a href="{{route('review')}}">Review</a></div>
            <div class="navbar-link"><a href="{{route('privacy')}}">Privacy Policy</a></div>
        </div>
        <!-- The main container showing selected products and with their links -->
        <div class="mainContainer">
            <div class="mainContainer-title">
                <h1><strong>View Our Selected Range</strong></h1>
            </div>
            <div class="big-collection">
                <div class="collection-flex">

                    <div class="collect">
                        <div class="images">
                            <img src="https://img.freepik.com/free-psd/picture-frame-mockup-psd-bright-clean-modern-bedroom_53876-130042.jpg?size=626&ext=jpg&ga=GA1.2.1531638419.1669300532&semt=sph
                    " width="230" height="230"  alt="">
                </div>
                <div class="link-pic">
                    <a href="{{route('beds')}}">Beds</a>
                 </div>
                 </div>


                <div class="collect">
                    <div class="images">
                     <img src="https://img.freepik.com/premium-photo/scandinavian-dark-living-room-interior-background-wall-mockup-3d-render_208753-332.jpg?size=626&ext=jpg&ga=GA1.2.1531638419.1669300532&semt=sph
                     " width="230" height="230"  alt="">
                    </div>
                    <div class="link-pic">
                     <a href="{{route('sofas')}}">Sofas</a>
                    </div>
                 </div>


                 <div class="collect">
                    <div class="images">
                     <img src="https://images.unsplash.com/photo-1517705008128-361805f42e86?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGNoYWlyfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60 " width="230"
                     height="230" alt="">
                    </div>
                    <div class="link-pic">
                     <a href="{{route('chairs')}}">Chairs</a>
                    </div>
                 </div>


                 <div class="collect">
                    <div class="images">
                     <img src="https://images.unsplash.com/photo-1544457070-4cd773b4d71e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y2hhaXJ8ZW58MHwyfDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" width="230" height="230"   alt="">
                    </div>
                    <div class="link-pic">
                     <a href="{{route('tables')}}">Tables</a>
                    </div>
                 </div>
                </div>

        
        </div>
    </div>
@endsection
