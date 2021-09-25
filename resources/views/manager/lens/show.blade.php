@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Lens {{ $lens->lensID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/manager/lens') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/manager/lens/' . $lens->lensID . '/edit') }}" title="Edit Lens"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('manager/lens' . '/' . $lens->lensID) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Lens" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
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
