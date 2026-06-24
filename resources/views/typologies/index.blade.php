@extends('layouts.app')

@section('content')
<h1>Typologies</h1>
<div class="py-3">
    <a href="{{route('typologies.create')}}" class="btn btn-primary">Add new typology</a>
</div>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($typologies as $typology)
        <tr>
            <td>{{$typology->name}}</td>
            <td>
                <div class="btn-group" role="group">
                    <a href="{{route('typologies.show',$typology->id)}}" class="btn btn-primary">
                        <i class="bi bi-eye-fill"></i>
                    </a>
                    <a href="{{route('typologies.edit', $typology)}}" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal{{$typology->id}}">
                        <i class="bi bi-trash3"></i>
                    </button>
                </div>
            </td>
        </tr>

        <!-- Modal -->
        <div class="modal fade" id="deletemodal{{$typology->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete typology</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the typology "{{$typology->name}}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{route('typologies.destroy', $typology)}}" method="POST">
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