@extends('layouts.app2')

@section('content')
    <div class="container">
        <div class="row">
           

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Employee {{ $employee->userID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/manager/employee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/manager/employee/' . $employee->userID . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('manager/employee' . '/' . $employee->userID) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $employee->userID }}</td>
                                    </tr>
                                    <tr><th> UserID </th><td> {{ $employee->userID }} </td></tr><tr><th> Username </th><td> {{ $employee->username }} </td></tr><tr><th> Password </th><td> {{ $employee->password }} </td></tr>
                                    <tr><th> Firstname </th><td> {{ $employee->firstname }} </td></tr><tr><th> Lastname </th><td> {{ $employee->lastname }} </td></tr><tr><th> Phone </th><td> {{ $employee->phone }} </td></tr>
                                    <tr><th> Emails </th><td> {{ $employee->email }} </td></tr><tr><th> Address </th><td> {{ $employee->address}} </td></tr><tr><th> Image Profile </th><td> {{ $employee->image }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
