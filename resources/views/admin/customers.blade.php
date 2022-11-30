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
                        <h2>Displaying all Customers</h2>
                        <!-- Constructs a table holding customer details -->
                        <table>
                            <tr class="attributes">
                                <td>
                                    User ID
                                </td>
                                <td>
                                    <div>First Name</div>
                                </td>
                                <td>
                                    <div>Last Name</div>
                                </td>
                                <td>
                                    <div>User Status</div>
                                </td>
                                <td>
                                    <div>Address Line 1</div>
                                </td>
                                <td>
                                    <div>Address Line 2</div>
                                </td>
                                <td>
                                    <div>Postcode</div>
                                </td>
                                <td>
                                    <div>E-Mail</div>
                                </td>
                                <td>
                                    <div>Account Type</div>
                                </td>
                                <td>
                                    <div>Joined Us since</div>
                                </td>
                            </tr>
                        @foreach ($customers as $customer)
                                <tr class="data">
                                    <td>
                                        {{$customer->id}}
                                    </td>
                                    <td>
                                        {{$customer->user_first_name}}
                                    </td>
                                    <td>
                                        {{$customer->user_last_name}}
                                    </td>
                                    @if($customer->user_status == "online")
                                        <td>Is Online</td>
                                    @else
                                        <td>Is Offline</td>
                                    @endif 
                                    <td class="userAddressLine1">{{$customer->user_address_line_1}}</td>    
                                    <td>{{$customer->user_address_line_2}}</td>                                   
                                    <td class="userPostcode">{{$customer->user_postcode}}</td>                                   
                                    <td class="userEmail">{{$customer->email}}</td>                                   
                                    @if($customer->isAdmin == 1)
                                        <td>Admin</td>
                                    @else
                                        <td>Customer</td>
                                    @endif
                                    <td>{{$customer->created_at}}</td>
                                </tr>
                                @endforeach
                            </table>
                        @foreach($customers as $customer)
                            <div class="order_table">
                                <div id="order-header">
                                        <span>
                                            Customer ID
                                        </span>
                                    <br/>
                                    <span>
                                            <strong>{{$customer->id}}</strong>
                                        </span>

                                </div>

                                <div id="customer-orders">
                                    <p>Customer First Name: {{$customer->user_first_name}}</p>
                                    <p>Customer Last Name: {{$customer->user_last_name}}</p>
                                    @if($customer->user_status == "online")
                                        <p>User Status: Is Online</p>
                                    @else
                                        <p>User Status: Is Offline</p>
                                    @endif
                                    <p>Customer Address Line 1: {{$customer->user_address_line_1}}</p>
                                    <p>Customer Address Line 2: {{$customer->user_address_line_2}}</p>
                                    <p>Customer Post Code: {{$customer->user_postcode}}</p>
                                    <p>Customer email address: {{$customer->email}}</p>
                                    @if($customer->isAdmin == 1)
                                        <p>User Account type: Admin</p>
                                    @else
                                        <p>User Account type: Customer</p>
                                    @endif
                                    <p>Joined us since: {{$customer->created_at}}</p>
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
