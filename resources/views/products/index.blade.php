@extends('layouts.app')
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
@section('content')
    <div class="container">
        <div class="product-selection">
            <div class="product-item">
                <div>
                    <a href="{{route('chairs')}}">Chairs</a>
                </div>
            </div>
            <div class="product-item">
                <div>
                <a href="{{route('tables')}}">Tables</a>
                </div>
            </div>
            <div class="product-item">
                <div>
                <a href="{{route('beds')}}">Beds</a>
                </div>
            </div>
            <div class="product-item">
                <div>
                <a href="{{route('sofas')}}">Sofas</a>
                </div>
            </div>
        </div>

        <div class="products">
            @foreach($products as $single)
            <div class="product">
                <div class="product-body">
                    <img class="col justify-content-center" src="{{asset("jpg/$single->image")}}" width="480" height="240"/>
                    <p><a href="product/{{$single->id}}"><strong>{{$single->product_name}}</strong></a></p>
                    <p>{{$single->product_type}}</p>
                    <p>{{$single->product_description}}</p>
                    <p>Price: £{{$single->product_price}}</p>
                    <p>Discount Price: £{{$single->price_deduction}}</p>
                </div>
            </div>
            @endforeach
            <br/>
        </div>
        </div>
@endsection
