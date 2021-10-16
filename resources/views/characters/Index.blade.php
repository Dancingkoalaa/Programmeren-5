@extends('layouts.app')

    @section('content')
    <div>
        <h1>{{$title}}</h1>
        @guest
        @else
        <a href="add-character" class="btn btn-primary btn-sm">Create a new character!</a>
        @endguest
        <form class="searchbar" action="/characters" method="get">
            <div>
                <input placeholder="Search" name="search" type="text" value="" id="search">
                <label class="hide-text" for="search">Search on words</label>
            </div>

            <div>
                <input type="submit" value="Search">
            </div>
        </form>
    <div class="container">
        <div class="row">
                        @foreach($characters as $character)
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="{{asset('storage/icon/' . $character->icon)}}" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">{{$character->Name}}</h5>
                                    <p class="card-text">{{$character->proficiency}}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Race: {{$character->Race}}</li>
                                </ul>
                                <a type="button" href="characters/{{ $character->id }}"  class="btn btn-outline-dark">Bekijk het character!</a>
                                </div>
                        @endforeach

                </div>
             </div>
    </div>
@endsection
