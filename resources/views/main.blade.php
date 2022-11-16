@extends('layouts.app')

<head>
    <link rel="stylesheet" href="{{asset("css/main.css")}}"/>
</head>

@section('content')
    <div class="banner">
        <div class="row-cols-md-1 justify-content-center">
            <img src="{{asset("gif/advert.gif")}}"/>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        <h1>This is the homepage</h1>
                        To visit products <a href="{{route('products')}}">Click here</a>
                        <br/>
                        <a href="{{'contacts'}}">To Visit Contact Us</a>
                        <br/>
                        <a href="{{'about'}}">To Visit About Us</a>
</br>
                        <a href="{{'C:\xampp\htdocs\TresorLDN_E-Commerce-\resources\views\review.blade.php'}}">This is the review us page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
