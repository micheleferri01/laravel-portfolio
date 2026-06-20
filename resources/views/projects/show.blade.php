@extends('layouts/app')

@section('content')

    <div class='my-3'>
        <h1>{{$project->name}}</h1>
        <h2>- {{$project->author}}</h2>
    </div>

    <h3 class='fs-4'>Client: {{$project->client}}</h2>
    <h4>Typology: {{$project->typology}}</h4>
    <p>{{$project->resume}}</p>

@endsection