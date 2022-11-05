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

                    @foreach($basket_collections as $single)

                        @if($single->user_id == \Illuminate\Support\Facades\Auth::id())
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="grid">
                                        {{$single->product_name}}

                                        {{$single->product_price}}

                                        {{$single->price_deduction}}
                                    </div>
                                </li>
                            </ul>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
