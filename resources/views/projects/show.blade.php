@extends('layouts/app')

@section('content')
<div class='container'>
    <h1 class='my-3'>{{$project->name}}</h1>
    
    <h2 class='fs-4'>Client: {{$project->client}}</h2>
    
    <p>{{$project->resume}}</p>
</div>
@endsection
