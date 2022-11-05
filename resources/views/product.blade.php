@extends('layouts.app')
@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <img src="/jpg/{{$products->image}}" width="800" height="520"/>
                            <p><strong>{{$products->product_name}}</strong></p>
                            <p>{{$products->product_type}}</p>
                            <p>{{$products->product_description}}</p>
                            <p>£{{$products->product_price}}</p>

                            <form action="/addItem" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$products->id}}">
                                <input type="hidden" name="product_name" value="{{$products->product_name}}">
                                <input type="hidden" name="product_type"  value="{{$products->product_type}}">
                                <input type="hidden" name="product_description"  value="{{$products->product_description}}">
                                <input type="hidden" name="product_price"  value="{{$products->product_price}}">
                                <input type="hidden" name="price_deduction"  value="{{$products->price_deduction}}">
                                <button type="submit">Add to Basket</button>
                            </form>
                        </div>
                    </div>
                    <br/>
                </div>
            </div>
        </div>
@endsection
