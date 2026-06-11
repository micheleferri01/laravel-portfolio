@extends('layouts/app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ Auth::user()->name }}'s dashboard
    </h2>
    
@endsection