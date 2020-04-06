@extends('layouts.album')

@section('content')
    <h1>Create Album</h1>
    {!! Form::open(['action'=>'PhotosController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {!! Form::label('title')!!}
        </div>
        <div class="form-group">
            {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'title name']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('description')!!}
        </div>
        <div class="form-group">
            {!! Form::textarea('description', '',['class'=>'form-control','placeholder'=>'Album description']) !!}
        </div>

        {{ Form::hidden('album_id',$album_id) }}

        <div class="form-group">
            {!! Form::label('upload photo')!!}
        </div>
        <div class="form-group">
            {!! Form::file('photo') !!}
        </div>

        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection