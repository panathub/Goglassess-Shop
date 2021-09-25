<?php
    
    $id = $product->productID; //เมื่อ click ปุ่ม view จะส่งรหัสสินค้าเฉพาะ item ที่เลือกแสดงมายังหน้า show.blade.php
    $parts = DB::connection('mysql')
    ->select('select product.productID, product.productname, product.stock, product.price, product.image
    ,product.Likes, product_type.producttypeID, product_type.typename  , band.bandID , band.bandName
    from product left join product_type on product.producttypeID = product_type.producttypeID
    left join band on product.bandID = band.bandID
    where product.productID=?', [$id]);
    //query ข้อมูลเฉพาะ productID ที่ส่งมาจากหน้า index.blade.php สามารถกำหนด fields ที่ต้องการนำมาแสดงได้
?>



@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Product {{ $product->productID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/product') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
               
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                @foreach($parts as $row)
                                    <tr><th> ProductID </th><td> {{ $row->productID }} </td></tr>
                                    <tr><th> Productname </th><td> {{ $row->productname }} </td></tr>
                                    <tr><th> Stock </th><td> {{ $row->stock }} </td></tr>
                                    <tr><th> Price </th><td> {{ $row->price }} </td></tr>
                                    <tr><th> Image </th><td> {{ $row->image }} </td></tr>
                                    <tr><th> Likes </th><td> {{ $row->Likes }} </td></tr>
                                    <tr><th> ProducttypeID </th><td> {{ $row->typename }} </td></tr>
                                    <tr><th> BandID </th><td> {{ $row->bandName }} </td></tr>
                                    <tr><th> Image </th><td> <img src="{{ url('/') }}/assets/uploadfile/product/{{ $row->image }}" width='500px' height='500px'></td></tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
