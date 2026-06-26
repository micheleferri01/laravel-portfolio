@extends('layouts.app')

@section('content')
<h1 class="badge my-3 fs-1" style="background-color: {{$technology->color}};">{{$technology->name}}</h1>
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

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal{{$project->id}}">
                        <i class="bi bi-trash3"></i>
                    </button>
                </div>
            </td>
        </tr>


        <!-- Modal -->
        <div class="modal fade" id="deletemodal{{$project->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the project "{{$project->name}}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('projects.destroy', $project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </tbody>

</table>
@endsection