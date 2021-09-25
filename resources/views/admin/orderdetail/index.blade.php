

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Orderdetail</h4></div>
                    <div class="card-body">
                        



                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>orderID</th><th>productname</th><th>typename</th><th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($orderdetail as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->orderID }}</td><td>{{ $item->productname }}</td><td>{{ $item->typename }}</td>
                                        <td>
                                            
                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $orderdetail->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
