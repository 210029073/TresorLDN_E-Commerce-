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
                        <strong><?php

use App\Models\Orderline;
use App\Models\Products;
use App\Models\User;
                            // Used for determining the number of:
                                //Customers registered.
                                //Orders processed
                                //Products in stock
                            $user = new User();
                            $size = $user->size();
                            
                            $orderline = new Orderline();
                            $orderSize = $orderline->size();
                            
                            $product = new Products();
                            $prodSize = $product->size();
                        ?></strong>
                        <h1>Admin Dashboard</h1>
                        <div class="userContainer">
                        <div class="adminCard">
                                <div class="adminCardContent">
                                    <a href="{{route('adminViewCustomers')}}"><h2>View Customers</h2></a>
                                </div>
                                <div class="adminCardTitle">
                                    <strong><p>Currently {{$size}} customers registered</p></strong>
                                </div>
                            </div>
                            <div class="adminCard">
                                <div class="adminCardContent">
                                    <a href="{{route('adminViewOrders')}}"><h2>View Orders</h2></a>
                                </div>
                                <div class="adminCardTitle">
                                    <strong><p>Currently {{$orderSize}} orders processed</p></strong>
                                </div>
                            </div>
                            <div class="adminCard">
                                <div class="adminCardContent">
                                    <a href="{{route('adminViewProducts')}}"><h2>View Products</h2></a>
                                </div>
                                <div class="adminCardTitle">
                                    <strong><p>Currently {{$prodSize}} products in stock</p></strong>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection
