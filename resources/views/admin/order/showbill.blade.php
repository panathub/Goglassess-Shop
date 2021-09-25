<!--?php
    
    $id = $order->orderID; 
    $parts = DB::connection('mysql')
    ->select('select orders.orderID, orders.setPoint, orders.statusID, orders.updated_at,
     order_details.orderID,order_details.quanTotal,order_details.priceTotal,order_details.pointTotal,
     products.productID, products.productName, products.productImage,
     users.userID, users.name
    from orders 
    left join order_details on orders.orderID = order_details.orderID
    left join products on order_details.productID = products.productID
    left join users on orders.userID = users.userID
    where orders.orderID=? ', [$id]);
?-->
<?php
    
    $id = $order->orderID; 
    $parts = DB::connection('mysql')
    ->select('SELECT * FROM payment WHERE orderID =?',[$id]);
?>

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">order {{ $order->orderID }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
               
                        <br/>
                        <br/>

                        <div class="table-responsive">
                        @foreach($parts as $item)

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $item->orderID }}</td>
                                    </tr>
                                    <tr><th> OrderID </th><td> {{ $item->orderID }} </td></tr>
                                    <tr><th> Date </th><td> {{ $item->paydate }} </td></tr>
                                    <tr><th> Bill </th><td> <img src="{{ url('/') }}/assets/uploadfile/payment/{{ $item->image }}" width='500px' height='500px'></td></tr>
                                   
                                </tbody>
                            </table>
                            @endforeach
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
