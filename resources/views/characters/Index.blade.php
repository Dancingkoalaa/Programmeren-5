@extends('layouts.app')

    @section('content')
    <div>
    <h1>{{$title}}</h1>
    <div class="container">
        <div class="row">
        @foreach($characters as $character)
            <div class="col-sm border border-dark rounded-0">
                <img src="{{$character->icon}}">
                <p>Character: {{$character->Name}} is een {{$character->Race}} en specialiseert in {{$character->proficiency}}</p>
                <a type="button" href="characters/{{ $character->id }}"  class="btn btn-outline-dark">Dit gaat ergens naartoe!</a>
                <a href="add-character" class="btn btn-primary btn-sm">Create</a>
                <a href="edit-character/{{$character->id}}" class="btn btn-primary btn-sm">Edit</a>
                <a type="button" href="delete/{{$character->id}}" class="btn btn-outline-dark">Delete</a>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
