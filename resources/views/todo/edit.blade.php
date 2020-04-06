@extends('layouts.appp')

@section('content')
   <h1>Edit Todo</h1>
   {!! Form::model($todo,['method'=>'PATCH','action'=>['TodoController@update',$todo->id]]) !!}
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name',null, ['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('due') !!}
        {!! Form::text('due',null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('body','body') !!}
        {!! Form::textarea('body',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
