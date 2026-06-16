@extends('layouts/app')

@section('content')
<div class="container">

    <h1 class='my-3'>Projects</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Client</th>
                <th>Resume</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->client}}</td>
                <td>{{$project->resume}}</td>
                <td><a href="{{route('projects.show',$project->id)}}">See more</a></td>
            </tr>
            @endforeach
        </tbody>
    
    </table>
</div>
@endsection