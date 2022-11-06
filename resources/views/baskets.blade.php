@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1>This is the Basket Page</h1>
                        To visit products <a href="{{route('products')}}">Click here</a>
                        <br/>
                        <a href="{{'contacts'}}">To Visit Contact Us</a>
                        <br/>
                        <a href="{{'about'}}">To Visit About Us</a>
                    </div>
                </div>
            </div>

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
                                        <form action="/removeItem" method="GET">
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
                </div>
            </div>
        </div>
    </div>
@endsection
