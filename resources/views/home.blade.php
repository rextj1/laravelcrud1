@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Your Listings</h3>
                    <table class="table table-light table-active table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Bio</th>
                                    <th scope="col">Edit Listing</th>
                                </tr>
                            </thead>
                            @foreach($listings as $listing)
                            <tbody>
                                <tr>
                                    <td scope="col">{{$listing->name}}</td>
                                    <td scope="col">{{$listing->address}}</td>
                                    <td scope="col">{{$listing->website}}</td>
                                    <td scope="col">{{$listing->email}}</td>
                                    <td scope="col">{{$listing->phone}}</td>
                                    <td scope="col">{{$listing->bio}}</td>
                                    <td scope="col"><a class="btn btn-primary" href="listing/{{$listing->id}}/edit">Edit</a></td>
                                    <td scope="col">
                                        {!! Form::open(['action'=>['ListingController@destroy', $listing->id], 'method'=>'DELETE','class'=>'pull-right', 'onsubmit'=>'return confirm("Are you sure?")']) !!}
                                        {!! Form::submit('delete', ['class'=>'btn btn-danger',]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach                 
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
