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
                        <h2>View a List of Customer</h2>
                        @foreach($customers as $customer)
                            {{--                            @foreach($orders as $order)--}}
                            <div class="order_table">
                                <div id="order-header">
                                        <span>
                                            Customer ID
                                        </span>
                                    <br/>
                                    <span>
                                            <strong>{{$customer->id}}</strong>
                                        </span>

                                </div>

                                <div id="customer-orders">
                                    <p>Customer First Name: {{$customer->user_first_name}}</p>
                                    <p>Customer Last Name: {{$customer->user_last_name}}</p>
                                    @if($customer->user_status == "online")
                                        <p>User Status: Is Online</p>
                                    @else
                                        <p>User Status: Is Offline</p>
                                    @endif
                                    <p>Customer Address Line 1: {{$customer->user_address_line_1}}</p>
                                    <p>Customer Address Line 2: {{$customer->user_address_line_2}}</p>
                                    <p>Customer Post Code: {{$customer->user_postcode}}</p>
                                    <p>Customer email address: {{$customer->email}}</p>
                                    @if($customer->isAdmin == 1)
                                        <p>User Account type: Admin</p>
                                    @else
                                        <p>User Account type: Customer</p>
                                    @endif
                                    <p>Joined us since: {{$customer->created_at}}</p>
                                </div>
                            </div>
                            <br/>
                            {{--                            @endforeach--}}
                        @endforeach
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection
