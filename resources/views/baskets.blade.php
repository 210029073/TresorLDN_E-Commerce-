@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

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
        </div>
    </div>
@endsection
