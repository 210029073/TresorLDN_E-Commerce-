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
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
    @endforeach
@endsection
