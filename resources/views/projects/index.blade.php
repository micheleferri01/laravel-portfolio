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
            <td>
                <div class="btn-group" role="group">
                    <a href="{{route('projects.show',$project->id)}}" class="btn btn-primary">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="{{route('projects.edit', $project)}}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="{{route('projects.destroy', $project)}}" class="btn btn-danger">
                        <i class="bi bi-trash3"></i>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection