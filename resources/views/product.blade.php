@extends('layouts.app')
@section('content')
        <div class="container">
            <!-- A navigation bar specifically used to access products at their type -->
            <div class="product-selection">
                <div class="product-item">
                    <div>
                        <a href="{{route('products')}}">All</a>
                    </div>
                </div>
                <div class="product-item">
                    <div>
                        <a href="{{route('chairs')}}">Chairs</a>
                    </div>
                </div>
                <div class="product-item">
                    <div>
                        <a href="{{route('tables')}}">Tables</a>
                    </div>
                </div>
                <div class="product-item">
                    <div>
                        <a href="{{route('beds')}}">Beds</a>
                    </div>
                </div>
                <div class="product-item">
                    <div>
                        <a href="{{route('sofas')}}">Sofas</a>
                    </div>
                </div>
            </div>
            <div class="singleProductContainer">
                <div class="singleProductContents">
                    <div class="singleProductImage">
                        <img src="{{asset("/jpg/$products->image")}}"/>
                    </div>
                    <div class="singleProductDetails">
                        <!-- Rendering product details -->
                        <h2><strong>{{$products->product_name}}</strong></h2>
                        <h4><strong>Product Type</strong></h4>
                        <p>{{$products->product_type}}</p>
                        <h4><strong>Description</strong></h4>
                        <p><i>{{$products->product_description}}</i></p>
                        <h4><strong>Price</strong></h4>
                        <p>£{{$products->product_price}}</p>
                        @if($products->is_discount_applied)
                            <p>Now £{{($products->product_price)-$products->price_deduction}}</p>
                        @endif
                        <!-- Adds item to basket -->
                        @if(!\Illuminate\Support\Facades\Auth::guest())
                            <form action="../addItem" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$products->id}}">
                                <input type="hidden" name="product_name" value="{{$products->product_name}}">
                                <input type="hidden" name="product_type"  value="{{$products->product_type}}">
                                <input type="hidden" name="product_description"  value="{{$products->product_description}}">
                                <input type="hidden" name="product_price"  value="{{$products->product_price}}">
                                <input type="hidden" name="price_deduction"  value="{{$products->price_deduction}}">
                                <button type="submit">Add to Basket</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
