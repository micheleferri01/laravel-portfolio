@extends('layouts.app')

@section('content')
<h1 class="my-3">Edit typology</h1>

<form action="{{route('typologies.edit')}}" method="post">
    @csrf
    @method('put')
    <div class="my-2">
        <label for="name" class="form-label">Typology name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{$typology->name}}">
    </div>
    <div class="my-2">
        <label for="description" class="form-label">Typology description</label>
        <textarea name="description" id="description" class="form-control">{{$typology->description}}</textarea>
    </div>
    <div class="my-2">
        <input type="submit" value="Edit" class="btn btn-primary">
        <a href="{{route('typologies.index')}}" class="btn btn-danger">Cancel</a>
    </div>
</form>
@endsection