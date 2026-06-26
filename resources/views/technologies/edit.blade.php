@extends('layouts.app')

@section('content')
<h1 class="my-3">Add new technology</h1>
<form action="{{route('technologies.update', $technology)}}" method="post">
    @csrf
    @method('put')
    <div class="my-2">
        <label for="name" class="form-label">Technology name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$technology->name}}">
    </div>
    <div class="my-2 d-flex flex-column">
        <label for="color" class="form-label">Color</label>
        <input type="color" name="color" id="color" value="{{$technology->color}}">
    </div>

    <div class="mt-3">
        <input type="submit" value="Save" class="btn btn-primary">
        <a href="{{route('technologies.index')}}" class="btn btn-danger">Cancel</a>
    </div>

</form>
@endsection