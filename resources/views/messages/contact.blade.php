@extends('layouts.ap')

@section('contentt')
    <h1>Contact</h1>

    {!! Form::open(['action'=>'MessagesController@submit','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('name')!!}
        </div>
        <div class="form-group">
            {!! Form::text('name', '', ['class'=>'form-control','placeholder'=>'Enter name']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('email')!!}
        </div>
        <div class="form-group">
            {!! Form::text('email', '',['class'=>'form-control','placeholder'=>'example@ya.com']) !!}
        </div>

         <div class="form-group">
            {!! Form::label('message')!!}
        </div>
        <div class="form-group">
           {!! Form::textarea('message','' , ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
