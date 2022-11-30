@extends('layouts.app')

@section('content')
@if (session()->has('emptiedBasket'))
    <h1 class="alert alert-success text-bg-success" role="alert">{{session()->get('emptiedBasket')}}</h1>
@endif
@if (session()->has('failedToRemoveAllFromBasket'))
<h1 class="alert alert-danger text-bg-danger" role="alert">{{session()->get('failedToRemoveAllFromBasket')}}</h1>
@endif
    <div class="container">
        <div>
            <span>
                <h1><strong>Shopping Basket</strong></h1>
                <?php

use App\Http\Controllers\BasketCollectionController;

 $count = 0; ?>
                
                @foreach($basket_collections as $single)
    
                    @if($single->user_id == \Illuminate\Support\Facades\Auth::id())
                        <?php $count = $count + 1; ?>
                    @endif
                @endforeach
    
                @if($count == 0)
                    <h1><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}} your basket is empty</strong></h1>
                @else
                    <h1><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}}, you currently have {{$count}} items.</strong></h1>
    
                @endif
            </span>
        </div>
        <div class="basketContainer">
            <?php $discount = $total = $cartSize = 0?>
            <div class="basketContent">
                @foreach ($basket_collections as $single)
                    @if($single->user_id == \Illuminate\Support\Facades\Auth::id())   
                        <div class="basketImg">
                            <!-- renders the product's image -->
                            <?php 
                                // use \App\Models\Products;
                                // Retrieves item's image from convenient method provided by controller
                                // according to the product id provided by the products table.
                                $pr = new \App\Http\Controllers\BasketCollectionController();
                                $imagePath = $pr->getProductImage($single->id)->image;
                                ?>
                            {{-- <img src="{{asset("jpg/$imagePath")}}"> --}}
                        </div>
                        <div class="basketItemDetails">
                            <!-- renders the product's image -->
                            <div class="basketItem">
                                <img src="{{asset("jpg/$imagePath")}}">
                            </div>
                            <div>
                                <p>{{$single->product_name}}</p>
                                <p>{{$single->product_description}}</p>
                                <p>Price: £{{number_format($single->product_price,2)}}</p>
                                <p>Deducted: £{{number_format($single->price_deduction,2)}}</p>
                                <!-- Provides an option to remove an item from the basket -->
                                <form action="removeItem" method="GET">
                                    @csrf
                                    <input type="hidden" name="basket_collection_id" value="{{$single->basket_collection_id}}"/>
                                    <input type="hidden" name="product_id" value="{{$single->id}}"/>
                                    <input type="hidden" name="product_name" value="{{$single->product_name}}"/>
                                    <input type="hidden" name="product_type" value="{{$single->product_type}}"/>
                                    <input type="hidden" name="product_price" value="{{$single->product_price}}"/>
                                    <input type="hidden" name="product_description" value="{{$single->product_description}}"/>
                                    <input type="hidden" name="price_deduction" value="{{$single->price_deduction}}"/>
                                    <button type="submit">Remove</button>
                                </form>
                            </div>
                        </div>
                        <?php
                            // Provides discount calculated 
                            $discount = $discount + $single->price_deduction;
                            $total = $total + ($single->product_price);
                            $bcc = new BasketCollectionController();

                            //counts the number items that are within cart
                            $cartSize = $bcc->size();
                        ?>
                    @endif
                @endforeach
                <?php 
                    //deducts total according to discount
                    $total = $total - $discount;
                ?>
                <!-- Option for removing all items from basket -->
                <form action="{{route('removeAll')}}" method="GET">
                    @csrf
                    <button class="shopBtn" type="submit">Remove All</button>
                </form>
            </div>
            <!-- Provides order summary in terms of displaying total, and deductions -->
            <!-- Allows orders to be processed by including Checkout button -->
            <div class="basketOrderSummary">
                <span>
                    <h2>Order Summary</h2>
                </span>
                <span>
                    <p>Total Number of items in Cart: {{$cartSize}}</p>
                    <p>Total Deducted: £{{number_format($discount,2)}}</p>
                    <p>Total: £{{number_format($total,2)}}</p>
                </span>
                <form action="basket/createOrder" method="POST">
                    @csrf
                    <button class="shopBtn" type="submit">Checkout</button>
                </form>
            </div>
        </div>
        {{--<div class="row justify-content-center">

            <?php $count = 0; ?>

            @foreach($basket_collections as $single)

                @if($single->user_id == \Illuminate\Support\Facades\Auth::id())
                    <?php $count = $count + 1; ?>
                @endif
            @endforeach

            @if($count == 0)
                <h1><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}} your basket is empty</strong></h1>
            @else
                <h1><strong>{{\Illuminate\Support\Facades\Auth::user()->user_first_name}}, you currently have {{$count}} items.</strong></h1>

            @endif

            <div class="card">
                <div class="card-body">
                    <?php $total = 0 ?>
                    @foreach($basket_collections as $single)

                        @if($single->user_id == \Illuminate\Support\Facades\Auth::id())
                            <ul class="list-group">
                                <li class="list-group-item m-0">
                                    <div class="grid flex-row flex-wrap m-0">
                                        {{$single->product_name}}

                                        £{{$single->product_price}}

                                        £{{$single->price_deduction}}

                                        {{$total = $total + $single->product_price - $single->price_deduction}}
                                        <form action="removeItem" method="GET">
                                            @csrf
                                            <input type="hidden" name="basket_collection_id" value="{{$single->basket_collection_id}}"/>
                                            <input type="hidden" name="product_id" value="{{$single->id}}"/>
                                            <input type="hidden" name="product_name" value="{{$single->product_name}}"/>
                                            <input type="hidden" name="product_type" value="{{$single->product_type}}"/>
                                            <input type="hidden" name="product_price" value="{{$single->product_price}}"/>
                                            <input type="hidden" name="product_description" value="{{$single->product_description}}"/>
                                            <input type="hidden" name="price_deduction" value="{{$single->price_deduction}}"/>
                                            <button type="submit">Remove</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endif
                    @endforeach
                        Overall Total: £{{$total}}
                        <form action="basket/createOrder" method="POST">
                            @csrf
                            <button type="submit">Checkout</button>
                        </form>

                        <form action="{{route('removeAll')}}" method="GET">
                            @csrf
                            <button type="submit">Remove All</button>
                        </form>
                </div>
            </div>
        </div>--}}
    </div>
@endsection
