@extends('layouts.ap')

@section('contentt')
    <h1>Message</h1>
  
    @if(count($messages)>0)
     
        @foreach($messages as $message)    
        <ul class="list-group">
            <li class="list-group-item"><h3>{{$message->name}}</h3>
            <li class="list-group-item">{{$message->email}}</li>
            <li class="list-group-item">{{$message->message}}</li>
            <br>
        </ul>
        @endforeach   
    @endif
  
@endsection
       

@section('sidebar')
@parent
    <p>This is appended to the sidebar</p>
@endsection