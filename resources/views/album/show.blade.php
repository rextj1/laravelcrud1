@extends('layouts.album')
@section('content')
    <div class="">
        <h1>{{$album->name}}</h1>
        <div>
            <a class="button primary" href="/albums"><span class="btn btn-secondary">Go Back</span></a>
            <a href="/photo/create/{{$album->id}}">
                <span  class="btn btn-primary">Upload to album</span>
            </a>
        </div>
        <div>
            <a  href="/album/{{$album->id}}" class="">
                <img class="img-thumbnail" width="300" height="300" src="/storage/album_cover/{{$album->cover_image}}" alt="{{$album->name}}">
            </a>
        </div>
    
        <br>
        <div>
            <a class="btn btn-primary float-left" href="/album/{{$album->id}}/edit">Edit</a>
           
                {!! Form::open(['method'=>'DELETE','action'=>['AlbumsController@destroy',$album->id],'onsubmit'=>'return comfirm("Delete Item?")']) !!}
                {!! Form::submit('delete', ['class'=>'btn btn-danger']) !!}
     
        </div>
    </div> 
@endsection
