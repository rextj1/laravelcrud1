@extends('layouts.app')

@section('contentt')
    @if(count($pages)>0)
        @foreach($pages as $page)
            <ul class="list-group">
                <li class="list-group-item"><h2>{{$page->name}}</h2></li>
                <li class="list-group-item"><h2>{{$page->email}}</h2></li>
            </ul>
        @endforeach
    @endif
@endsection