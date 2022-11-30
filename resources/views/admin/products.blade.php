@extends('admin.system')
<head>
    <title>Admin - Customers</title>
    <link rel="stylesheet" href="{{asset("css/pastOrders.css")}}"/>
</head>
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <div class="card">
                    <div class="card-body">
                        <h2>Displaying all Products</h2>
                        <!-- Constructs a table that holds a list of products in stock from the
                    products table -->
                        <table>
                            <tr class="attributes">
                                <td>Product ID</td>
                                <td>Product Name</td>
                                <td>
                                    Product Type
                                </td>
                                <td>
                                    Product Description
                                </td>
                                <td>
                                    <div>Product Price</div>
                                </td>
                                <td>
                                    <div>Is Discount Applied</div>
                                </td>
                                <td>
                                    <div>Deducted Price</div>
                                </td>

                            </tr>
                            <?php 
                                use \App\Models\Products;

                                $pr = new Products();
                            ?>
                            @foreach ($pr->getProducts() as $item)
                                <tr class="data">
                                    <td>{{$item->id}}</td>
                                    <td><strong>{{$item->product_name}}</strong></td>
                                    <td>
                                        {{$item->product_type}}
                                    </td>
                                    <td>
                                        <i>{{$item->product_description}}</i>
                                    </td>
                                    <td>
                                        <strong>£{{$item->product_price}}</strong>
                                    </td>
                                    @if($item->is_discount_applied == 1)
                                            <td>Yes</td>
                                        @else
                                            <td>N/A</td>
                                    @endif
                                    <td>
                                        <strong>£{{$item->price_deduction}}</strong>
                                    </td>
                                </tr>
                                @endforeach
                        </table>
                        @foreach($pr->getProducts() as $item)
                            <div class="order_table">
                                <div id="order-header">
                                        <span>
                                            Product ID:
                                        </span>
                                    <br/>
                                    <span>
                                            <strong>{{$item->id}}</strong>
                                        </span>

                                </div>
                                    <div id="customer-orders">
                                        <p>Product Name: <strong>{{$item->product_name}}</strong></p>
                                        <p>Product Type: {{$item->product_type}}</p>
                                        <p>Product Description: {{$item->product_description}}</p>
                                        <p>Product Price: <strong>£{{number_format($item->product_price, 2)}}</strong></p>
                                        @if($item->is_discount_applied == 1)
                                            <p>Is Discount Applied: Yes</p>
                                        @else
                                            <p>Is Discount Applied: No</p>
                                        @endif
                                    </div>
                            </div>
                            <br/>
                        @endforeach
                    </div>
                </div>
                <br/>
            </div>
        </div>
    </div>
@endsection
