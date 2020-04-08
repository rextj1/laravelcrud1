@extends('layouts.album')

@section('content')
    <h3>{{$photo->title}}</h3> 
    <p>{{$photo->description}}</p>
   
    <a href="/album/{{$photo->album_id}}">Back To Gallery</a>
    <hr>
    <img class="img-thumbnail" width="300" height="200" src="/storage/photo/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->name}}">

    
    
    {!! Form::open(['method'=>'DELETE','action'=>['PhotosController@destroy',$photo->id],'onsubmit'=>'return comfirm("Delete Item?")']) !!}
    {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
@endsection