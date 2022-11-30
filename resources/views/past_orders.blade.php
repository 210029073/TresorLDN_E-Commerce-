@extends('layouts.app')
<head>
    <title>View Previous Orders</title>
    <link rel="stylesheet" href="{{asset("css/pastOrders.css")}}"/>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Viewing Past Orders</strong></h1>
                        <br/>
                        <!-- The following views the past orders -->
                        <?php

use App\Models\Products;
                            //This will retrieve the number of orders made by the user
                            //And the past order page will go through the orders from the orders
                            //table according to the method provided by the BasketCollectionController
                            $size = count($prevOrders);
                        ?>
                        @if($size == 0)
                            <h2><strong>There is currently no past order.</strong></h2>
                        @else
                        <h2><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}}, this is your past orders</strong></h2>
                            @foreach($prevOrders as $orders)
                                @foreach($orders as $order)
                                <div class="singleProductContainer">
                                <div id="order-header">
                                            <span>
                                                Ordered on
                                            </span>
                                            <br/>
                                            <span>
                                                <!-- Renders the date from the order -->
                                                <strong>{{$order->order_date}}</strong>
                                            </span>
                                        
                                        </div>
                                    <div class="singleProductContents">
                                        <?php
                                            //This will retrieve the product's image according to the 
                                            //primary key provided by the Products table
                                            $product_image = new \App\Http\Controllers\BasketCollectionController(); 
                                            $product = $product_image->getProductImage($order->id);
                                        ?>
                                        <div class="singleProductImage">
                                            <!-- This will render the product image for each product the customer
                                        has requested -->
                                            <img src="{{asset("/jpg/$product->image")}}"/>
                                        </div>
                                        <!-- The product details displayed for each order according to its history -->
                                        <div class="singleProductDetails">
                                            <h2><strong>Order Reference No. {{$order->orderline_ref_no}}</strong></h2>
                                            <h4><strong>{{$order->product_name}}</strong></h4>
                                            <h5><strong>Product Type</strong></h5>
                                            <p>{{$order->product_type}}</p>
                                            <h5><strong>Single Price</strong></h5>
                                            <p>£{{$order->price}}</p>
                                            <h5><strong>Deductions</strong></h5> 
                                            <p>£{{$order->price_deduction}}</p>
                                            <h5><strong>Deductions</strong></h5> 
                                            <h5><strong>Total</strong></h5> 
                                            <p>£{{$order->total_product_price}}</p>
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                @endforeach
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
