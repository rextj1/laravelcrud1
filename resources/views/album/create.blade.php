@extends('layouts.album')

@section('content')
    <h1>Create Album</h1>
    {!! Form::open(['action'=>'AlbumsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('name')!!}
        </div>
        <div class="form-group">
            {!! Form::text('name', '', ['class'=>'form-control','placeholder'=>'Album name']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('description')!!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', '',['class'=>'form-control','placeholder'=>'Album description']) !!}
        </div>
        <div class="form-group">
            {!! Form::file('cover_image') !!}
        </div>
        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection