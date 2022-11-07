@extends('layouts.app')
<head>
    <title>View Previous Orders</title>
    <link rel="stylesheet" href="{{asset("css/pastOrders.css")}}"/>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Viewing Past Orders</strong></h1>
                        <br/>
                        <?php
                            $size = count($prevOrders);
                        ?>
                        @if($size == 0)
                            <h2><strong>There is currently no past order.</strong></h2>
                        @else
                        <h2><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}}, this is your orders</strong></h2>
                            @foreach($prevOrders as $order)
                                <div class="order_table">
                                    <div id="order-header">
                                        <span>
                                            Ordered on
                                        </span>
                                        <br/>
                                        <span>
                                            <strong>{{$order->order_date}}</strong>
                                        </span>

                                    </div>

                                    <div id="customer-orders">

                                        <p>Order Reference No: {{$order->order_ref_no}}</p>
                                        <p>Name of Item: <a href="product/{{$order->id}}">{{$order->product_name}}</a></p>
                                        <p>Price: £{{$order->price}}</p>
                                        <p>Deductions: £{{$order->price_deduction}}</p>
                                        <p>Total: £{{$order->total_product_price}}</p>
                                    </div>
                                </div>
                                <br/>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
