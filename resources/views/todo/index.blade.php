@extends('layouts.appp')

@section('content')
    <h1>Todos</h1>
    @if(count($todos)>0)
        @foreach($todos as $todo)
            <ul class="list-group">
                <li class="list-group-item">
                   <a href="todo/{{$todo->id}}"><h3>{{$todo->name}}</h3></a> 
                </li>
                <li class="list-group-item">{{$todo->body}}</li>
                <li class="list-group-item"><span class="">{{$todo->due}}</span></li>
            </ul>
        @endforeach
    @endif
@endsection