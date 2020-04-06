@extends('layouts.appp')

@section('content')
    {!! Form::open(['action'=>'TodoController@store','method'=>'POST']) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', '', ['class'=>'form-control','placeholder'=>'Enter name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('body') !!}
        {!! Form::textarea('body','',['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('due') !!}
        {!! Form::text('due', '', ['class'=>'form-control','placeholder'=>'Enter due']) !!}
    </div>
    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    
@endsection