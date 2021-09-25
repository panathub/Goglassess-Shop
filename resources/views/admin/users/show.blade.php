@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
          

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header"><h4>Users {{ $users->userID }}</h4></div>
                    <div class="card-body">

                        <a href="{{ url('/admin/users') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/users/' . $users->userID . '/edit') }}" title="Edit Users"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $users->userID }}</td>
                                    </tr>
                                    <tr><th> UserID </th><td> {{ $users->userID }} </td></tr><tr><th> Username </th><td> {{ $users->username }} </td></tr><tr><th> Password </th><td> {{ $users->password }} </td></tr>
                                    <tr><th> Firstname </th><td> {{ $users->firstname }} </td></tr><tr><th> Lastname </th><td> {{ $users->lastname }} </td></tr><tr><th> Phone </th><td> {{ $users->phone }} </td></tr>
                                    <tr><th> Emails </th><td> {{ $users->email }} </td></tr><tr><th> Address </th><td> {{ $users->address}} </td></tr><tr><th> Image Profile </th><td> {{ $users->image }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
