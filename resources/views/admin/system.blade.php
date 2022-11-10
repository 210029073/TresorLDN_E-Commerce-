@extends('layouts.app')
<head>
    <title>Admin</title>
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
                        <a href="{{route('adminViewCustomers')}}">View Customers</a>

                        <h2>View Orders</h2>
                        <a href="{{route('adminViewOrders')}}">View Orders</a>

                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection
