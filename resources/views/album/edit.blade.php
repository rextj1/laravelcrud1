@extends('layouts.album')

@section('content')
    <h1>Create Album</h1>
<div class="col-md-8">
    {!! Form::model($album,['method'=>'PATCH','enctype'=>'multipart/form-data','action'=>['AlbumsController@update',$album->id,]]) !!}
        <div class="form-group">
            {!! Form::label('name')!!}
        </div>
        <div class="form-group">
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('description')!!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description',null,['class'=>'form-control', 'cols'=>'10','rows'=>'10']) !!}
        </div>
        <div class="form-group">
              <img class="img-thumbnail" width="200" height="200" src="/storage/album_cover/{{$album->cover_image}}" alt="{{$album->name}}">
        </div>
        <div class="form-group">
            {!! Form::label('upload image')!!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image',null) !!}
        </div>
        {!! Form::hidden('cover_image',null) !!}
        {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@endsection
