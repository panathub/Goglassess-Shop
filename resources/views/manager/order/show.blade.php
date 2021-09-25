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
    ->select('SELECT product.*,lens.*,product_type.*,band.*,users.firstname,orders.*,order_detail.*
    FROM orders 
    INNER JOIN order_detail ON order_detail.orderID = orders.orderID 
    INNER JOIN product ON product.productID = order_detail.productID
    INNER JOIN lens ON lens.lensID = order_detail.LensID
    INNER JOIN band ON product.bandID  = band.bandID
    INNER JOIN product_type ON product_type.producttypeID  = product.producttypeID
    LEFT JOIN users ON users.userID  = orders.userID
    WHERE 1 AND orders.orderID =?',[$id]);
?>

@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">order {{ $order->orderID }}</div>
                    <div class="card-body">

                        <a href="{{ url('/manager/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/manager/order/' . $order->orderID . '/edit') }}" title="Edit order"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('manager/order' . '/' . $order->orderID) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete order" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
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
                                    <tr><th> productname </th><td> {{ $item->productname }} </td></tr>
                                    <tr><th> lenstype </th><td> {{ $item->lenstype }} </td></tr>
                                    <tr><th> bandName </th><td> {{ $item->bandName }} </td></tr>
                                    <tr><th> name user </th><td> {{ $item->firstname }} </td></tr>
                                    <tr><th> ========== </th><td> ============================================================</td></tr>
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
