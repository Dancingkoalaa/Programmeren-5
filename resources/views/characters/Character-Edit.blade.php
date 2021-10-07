@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit & Update Character
            <a href="/characters" class="btn btn-danger float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">

        <form action="/update-character/{{$character->id}}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="">Character Name</label>
                <input type="text" name="Name" value="{{$character->Name}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character Race</label>
                <input type="text" name="Race" value="{{$character->Race}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character Proficiency</label>
                <input type="text" name="Proficiency" value="{{$character->proficiency}}" class="form-control">
            </div>

            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Update Character</button>
            </div>

        </form>

    </div>
</div>
@endsection
