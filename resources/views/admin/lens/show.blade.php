@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Lens {{ $lens->lensID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/lens') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                  
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $lens->id }}</td>
                                    </tr>
                                    <tr><th> LensID </th><td> {{ $lens->lensID }} </td></tr><tr><th> Lenstype </th><td> {{ $lens->lenstype }} </td></tr><tr><th> Lensprice </th><td> {{ $lens->lensprice }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
