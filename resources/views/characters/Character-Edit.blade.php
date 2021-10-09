@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit & Update Character
            <a href="/characters" class="btn btn-danger float-end">BACK</a>
        </h4>
    </div>
    <div class="card-body">

        <form method="post" action="{{ route('store-edit', ['character' => $character]) }}" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="">Character Name</label>
                <input type="text" name="name" value="{{$character->Name}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character Race</label>
                <input type="text" name="race" value="{{$character->Race}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character Proficiency</label>
                <input type="text" name="proficiency" value="{{$character->proficiency}}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character icon</label>
                <input type="file" name="icon" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Character portrait</label>
                <input type="file" name="portrait" class="form-control">
            </div>


            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Update Character</button>
            </div>

        </form>

    </div>
</div>
@endsection
