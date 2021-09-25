@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
         

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Band {{ $band->bandID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/band') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                 
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $band->bandID }}</td>
                                    </tr>
                                    <tr><th> BandID </th><td> {{ $band->bandID }} </td></tr><tr><th> BandName </th><td> {{ $band->bandName }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
