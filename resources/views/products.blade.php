@extends('layouts.app')
@section('content')
    @foreach($products as $single)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{$single->product_name}}</div>

                    <div class="card-body">
                        <img src="jpg/{{$single->product_name}}.jpg" width="350" height="240"/>
                        <p>{{$single->product_type}}</p>
                        <p>{{$single->product_description}}</p>
                        <p>Price: £{{$single->product_price}}</p>

                        <form action="baskets.addToBasket">
                            <button type="submit" class="btn-primary btn-sm">Add in Basket</button>
                        </form>
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    @endforeach
@endsection
