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
                        <h2>Displaying all Orders</h2>
                        <!-- Constructs a table holding a list of orders from the orders table -->
                        <table>
                            <tr class="attributes">
                                <td>Date of Order</td>
                                <td>
                                    Orderline ID
                                </td>
                                <td>
                                    Order ID
                                </td>
                                <td>
                                    <div>Product Name</div>
                                </td>
                                <td>
                                    <div>Product Type</div>
                                </td>
                                <td>
                                    <div>Single Item Price</div>
                                </td>
                                <td>
                                    <div>Is Discount Applied</div>
                                </td>
                                <td>
                                    <div>Deducted Price</div>
                                </td>
                                <td>
                                    <div>Total</div>
                                </td>
                            </tr>
                            @foreach ($orders as $order)
                                <tr class="data">
                                    <td><strong>{{$order->order_date}}</strong></td>
                                    <td>
                                        {{$order->orderline_ref_no}}
                                    </td>
                                    <td>
                                        {{$order->order_ref_no}}
                                    </td>
                                    <td>
                                        <strong>{{$order->product_name}}</strong>
                                    </td>
                                    <td>
                                        {{$order->product_type}}
                                    </td>
                                    <td>
                                        <i>{{$order->product_description}}</i>
                                    </td>
                                    @if($order->is_discount_applied == 1)
                                            <td>Yes</td>
                                            <td>£{{$order->price_deduction}}</td>
                                        @else
                                            <td>No</td>
                                            <td>N/A</td>
                                        @endif
                                    <td class="userAddressLine1">£{{$order->total_product_price}}</td>    
                                </tr>
                                @endforeach
                        </table>
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
                                        <p>Date of Order: <strong>{{$order->order_date}}</strong></p>
                                        <p>Order Reference No.: {{$order->order_ref_no}}</p>
                                        <p>Product ID: {{$order->id}}</p>
                                        <p>Product Name: <strong>{{$order->product_name}}</strong></p>
                                        <p>Product Type: {{$order->product_type}}</p>
                                        <p>Product Description: <i>{{$order->product_description}}</i></p>
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
