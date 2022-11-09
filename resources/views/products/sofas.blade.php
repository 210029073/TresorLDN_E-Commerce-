@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="product-selection">
            <div class="product-item">
                <div>
                    <a href="{{route('products')}}">All</a>
                </div>
            </div>
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

        <h1>Showing sofas</h1>

        <div class="products">
            @foreach($products as $single)
                @if($single->product_type == "Sofa")
                    <div class="product">
                        <div class="product-body">
                            <img class="col justify-content-center" src="{{asset("jpg/$single->image")}}" width="480" height="240"/>
                            <p><a href="../product/{{$single->id}}"><strong>{{$single->product_name}}</strong></a></p>
                            <p>{{$single->product_type}}</p>
                            <p>{{$single->product_description}}</p>
                            <p>Price: £{{$single->product_price}}</p>
                            <p>Discount Price: £{{$single->price_deduction}}</p>
                        </div>
                    </div>
                @endif
            @endforeach
            <br/>
        </div>
    </div>
@endsection
