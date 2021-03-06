@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row"> 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h4>Lens</h4></div>
                    <div class="card-body">
                        <a href="{{ url('/admin/lens/create') }}" class="btn btn-success btn-sm" title="Add New Lens">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="{{ url('/admin/lens') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>LensID</th><th>Lenstype</th><th>Lensprice</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($lens as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->lensID }}</td><td>{{ $item->lenstype }}</td><td>{{ $item->lensprice }}</td>
                                        <td>
                                            <a href="{{ url('/admin/lens/' . $item->lensID) }}" title="View Band"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                           

                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $lens->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
