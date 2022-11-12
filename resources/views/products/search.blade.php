@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="products">
            @foreach($result as $single)
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
            @endforeach
            <br/>
        </div>
    </div>
@endsection
