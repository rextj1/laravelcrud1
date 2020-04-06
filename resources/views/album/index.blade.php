@extends('layouts.album')
@section('content')
<div class="col-md-12">
    @if(count($albums)>0)
       <div class="col-md-12 jumbotron">
               @foreach($albums as $album)
              
                   <a  href="/album/{{$album->id}}" class="">
                       <img class="thumbnail" width="250" height="250" src="storage/album_cover/{{$album->cover_image}}" alt="">
                   </a>
    
               @endforeach
       </div> 
    @endif
</div>
@endsection
