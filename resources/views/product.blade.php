@extends('layouts.app')
@section('content')
        <div class="container">
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
            <div class="row justify-content-center">
                <div class="col-md-13">
                    <div class="card">
                        <div class="card-body">
                            <div class="col-md-6">
                                <img src="{{asset("/jpg/$products->image")}}" width="800" height="520"/>
                            </div>
                            <p><strong>{{$products->product_name}}</strong></p>
                            <p>{{$products->product_type}}</p>
                            <p>{{$products->product_description}}</p>
                            <p>£{{$products->product_price}}</p>
                            @if($products->is_discount_applied)
                            <p>Now £{{($products->product_price)-$products->price_deduction}}</p>
                            @endif
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
                    <br/>
                </div>
            </div>
        </div>
@endsection
