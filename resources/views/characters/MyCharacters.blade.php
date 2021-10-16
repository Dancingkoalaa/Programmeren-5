@extends('layouts.app')

@section('content')
    <p>My creations</p>
    <section class="creations">
        <a href="add-character" class="btn btn-primary btn-sm">Create a new character!</a>
    <div class="container">
        <div class="row">
        @foreach($myCharacters as $myCharacter)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/icon/' . $myCharacter->icon)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$myCharacter->Name}}</b></h5>
                    <p class="card-text">{{$myCharacter->proficiency}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Race: {{$myCharacter->Race}}</li>
                </ul>
                <div class="card-body">
                    <a type="button" href="characters/{{ $myCharacter->id }}"  class="btn btn-outline-dark">Bekijk het character!</a>
                    <a type="button" href="edit-character/{{ $myCharacter->id }}" class="btn btn-outline-dark">Bewerk character!</a>
                    <a type="button" href="delete/{{ $myCharacter->id }}" class="btn btn-outline-dark">Verwijder character!</a>
                </div>
                <input data-id="{{ $myCharacter->id }}" class="toggle-button" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $myCharacter->active ? 'checked' : '' }}>
            </div>
    @endforeach
        </div>
    </div>
@endsection
