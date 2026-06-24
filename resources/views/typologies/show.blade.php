@extends('layouts.app')

@section('content')
    <h1 class="my-3">{{$typology->name}}</h1>
    @if($typology->description)
        <p>{{$typology->description}}</p>
    @endif

@endsection