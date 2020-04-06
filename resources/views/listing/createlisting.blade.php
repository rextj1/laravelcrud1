@extends('layouts.listing')

@section('content')
    {!! Form::open(['action'=>'ListingController@store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', '', ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('address') !!}
        {!! Form::text('address', '', ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('website') !!}
        {!! Form::text('website', '', ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', '', ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('phone') !!}
        {!! Form::text('phone', '', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bio') !!}
        {!! Form::textarea('bio', '', ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
    </div
    {!! Form::close() !!}
@endsection