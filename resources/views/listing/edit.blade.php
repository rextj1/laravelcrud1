@extends('layouts.listing')

@section('content')
    {!! Form::model($listing,['method'=>'PATCH','action'=>['ListingController@update',$listing->id]]) !!}
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('address') !!}
        {!! Form::text('address', null, ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('website') !!}
        {!! Form::text('website', null, ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('email') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('phone') !!}
        {!! Form::text('phone', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('bio') !!}
        {!! Form::textarea('bio', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
    </div
    {!! Form::close() !!}
@endsection

