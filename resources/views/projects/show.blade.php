@extends('layouts/app')

@section('content')

<div class='my-3'>
    <h1>{{$project->name}}</h1>
    <div class="btn-group py-4" role="group">
        <a href="{{route('projects.edit', $project)}}" class="btn btn-warning">
            <i class="bi bi-pencil-square"></i>
        </a>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal{{$project->id}}">
            <i class="bi bi-trash3"></i>
        </button>
    </div>
    <h2>- {{$project->author}}</h2>
</div>

<h3 class='fs-4'>Client: {{$project->client}}</h2>
<h4>Typology: {{$project->typology->name}}</h4>
<p>{{$project->resume}}</p>
@endsection

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