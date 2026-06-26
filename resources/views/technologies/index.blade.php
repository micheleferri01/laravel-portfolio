@extends('layouts.app')

@section('content')
<h1 class="my-3">Technologies</h1>
<div class="py-2">
    <a href="{{route('technologies.create')}}" class="btn btn-primary">Add new technology</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Color</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($technologies as $technology)
        <tr>
            <td>{{$technology->name}}</td>
            <td>
                <span
                    style="
                        display:inline-block;
                        width:20px;
                        height:20px;
                        background-color: {{ $technology->color }};
                        border:1px solid #ccc;
                        border-radius:4px;
                    "
                    title="{{ $technology->colore }}">
            </td>
            <td>
                <div class="btn-group" role="group">
                    <a href="{{route('technologies.show',$technology->id)}}" class="btn btn-primary">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="{{route('technologies.edit', $technology)}}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal{{$technology->id}}">
                        <i class="bi bi-trash3"></i>
                    </button>
                </div>
            </td>
        </tr>
        <!-- Modal -->
        <div class="modal fade" id="deletemodal{{$technology->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete technology</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the technology "{{$technology->name}}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('technologies.destroy', $technology)}}" method="POST">
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