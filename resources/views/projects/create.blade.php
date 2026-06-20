@extends('layouts.app')

@section('content')
<h1 class="mt-3">Add new project</h1>
<form action='{{route("projects.store")}}' method="post">
    @csrf
    <div class="mt-2">
        <label for="name" class="form-label">Project's name</label>
        <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="mt-2">
        <label for="author" class="form-label">Author</label>
        <input type="text" name="author" id="author" class="form-control">
    </div>
    <div class="mt-2">
        <label for="client" class="form-label">Client</label>
        <input type="text" name="client" id="client" class="form-control">
    </div>
    <div class="mt-2">
        <label for="typology" class="form-label">Typology</label>
        <select name="typology" id="typology" class="form-control">
                @foreach($typologies as $typology)
                    <option>{{$typology->name}}</option>
                @endforeach
        </select>
    </div>
    <div class="mt-2">
        <label for="resume" class="form-label">Project's description</label>
        <textarea name="resume" id="resume" class="form-control"></textarea>
    </div>
    <div class="mt-3">
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{route(projects.index)" class="btn btn-danger">Cancel</a>
    </div>

</form>
@endsection