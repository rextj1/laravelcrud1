@extends('layouts.album')

@section('content')

    <div class="">
       @if(count($photos)>0)
            @foreach($photos as $photo)
                <a href="/photo/{{$photo->id}}">
                    <img class="img-thumbnail" width="300" height="200" src="storage/photo/{{$photo->photo}}" alt="{{$photo->name}}">
                </a>
            @endforeach
    
            </div>
            <h3>{{$photo->title}}</h3> 
            <p>{{$photo->description}}</p>
        
            <a href="/album/{{$photo->album_id}}">Back To Gallery</a>
            <hr>
         @endif
    
@endsection