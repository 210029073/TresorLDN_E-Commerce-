@extends('admin.system')
<head>
    <title>Admin - Customers</title>
    <link rel="stylesheet" href="{{asset("css/pastOrders.css")}}"/>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-body">
                        <h1>Admin Page</h1>
                        <h2>Viewings Orders</h2>
                        @foreach($orders as $order)
                            <div class="order_table">
                                <div id="order-header">
                                        <span>
                                            Orderline Reference No.
                                        </span>
                                    <br/>
                                    <span>
                                            <strong>{{$order->orderline_ref_no}}</strong>
                                        </span>

                                </div>

                                    <div id="customer-orders">
                                        <p>Order Reference No.: {{$order->order_ref_no}}</p>
                                        <p>Product ID: {{$order->id}}</p>
                                        <p>Product Name: {{$order->product_name}}</p>
                                        <p>Product Type: {{$order->product_type}}</p>
                                        <p>Product Description: {{$order->product_description}}</p>
                                        <p>Item Price: £{{$order->price}}</p>
                                        @if($order->is_discount_applied == 1)
                                            <p>Is Discount Applied: Yes</p>
                                            <p>Deducted: £{{$order->price_deduction}}</p>
                                        @else
                                            <p>Is Discount Applied: No</p>
                                        @endif
                                        <p>Total: £{{$order->total_product_price}}</p>
                                    </div>
                            </div>
                            <br/>
                        @endforeach
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection
