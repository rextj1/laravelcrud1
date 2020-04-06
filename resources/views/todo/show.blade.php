@extends('layouts.appp')

@section('content')
        <ul class="list-group">
            <li class="list-group-item">
                <a href="/todo/{{$todo->id}}"><h3>{{$todo->name}}</h3></a> 
            </li>
            <li class="list-group-item">{{$todo->body}}</li>
            <li class="list-group-item"><span class="">{{$todo->due}}</span></li>
        </ul>
        <a class="float-left btn btn-primary" href="/todo/{{$todo->id}}/edit">Edit</a>
        
        <!-- delete -->
        {!! Form::open(['method'=>'DELETE','action'=>['TodoController@destroy',$todo->id]]) !!}
        {!! Form::submit('Delete', ['class'=>'float-right btn btn-danger']) !!}
        {!! Form::close() !!}
@endsection