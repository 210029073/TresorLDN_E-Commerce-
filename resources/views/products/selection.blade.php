@extends('layouts.app')
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
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
        <div class="products-container">
            <div class="filters">
                <form method="POST" action="{{route('productFilter')}}">
                    @csrf
                    <h5>Specify Price</h5>
                    <label for="price">Specify Price</label>
                    <input type="range" name="priceInput" placeholder="Between £0 to £1000" min="0" max="1000" oninput="this.form.priceRange.value=this.value"/>
                    <input type="number" name="priceRange" value="£0" min="0" max="1000" oninput="this.form.priceInput.value=this.value"/>
                    <br/><br/>
                    <h5>Specify Furniture</h5>
                    <input type="radio" id="sofas" name="furniture" value="Sofa"/>
                    <label for="sofas">Sofa</label><br/>
                    <input type="radio" id="chairs" name="furniture" value="Chair"/>
                    <label for="chairs">Chair</label><br/>
                    <input type="radio" id="beds" name="furniture" value="Bed"/>
                    <label for="beds">Bed</label><br/>
                    <input type="radio" id="tables" name="furniture" value="Table"/>
                    <label for="beds">Table</label><br/>
                    <button type="submit">Submit</button>
                </form>
            </div>
            <div class="products">
                @foreach($products as $single)
                    <div class="product">
                        <div class="product-body">
                            <img class="col justify-content-center" src="{{asset("jpg/$single->image")}}" width="480" height="240"/>
                            <p><a href="product/{{$single->id}}"><strong>{{$single->product_name}}</strong></a></p>
                            <p>{{$single->product_type}}</p>
                            <p>{{$single->product_description}}</p>
                            <p>Price: £{{$single->product_price}}</p>
                            <p>Discount Price: £{{$single->price_deduction}}</p>
                        </div>
                    </div>
                @endforeach
                <br/>
            </div>
        </div>
    </div>
@endsection
