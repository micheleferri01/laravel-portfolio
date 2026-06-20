@extends('layouts/app')

@section('content')


    <h1 class='my-3'>Projects</h1>
    <div class="mb-2">
        <a href="{{route('projects.create')}}" class="btn btn-primary">Add new project</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Author</th>
                <th>Client</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{$project->name}}</td>
                <td>{{$project->author}}</td>
                <td>{{$project->client}}</td>
                <td><a href="{{route('projects.show',$project->id)}}">See more</a></td>
            </tr>
            @endforeach
        </tbody>
    
    </table>

@endsection