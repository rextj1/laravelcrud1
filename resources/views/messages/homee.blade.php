@extends('layouts.ap')

@section('contentt')
    <h1>Home</h1>
@endsection

@section('sidebar')
@parent
    <p>This is appended to the side bar</p>
@endsection