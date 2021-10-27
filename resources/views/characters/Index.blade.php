@extends('layouts.app')

    @section('content')
    <div>
        <h1>{{$title}}</h1>
        @guest
        @else
        <a href="add-character" class="btn btn-primary btn-sm">Create a new character!</a>
        @endguest
        <form>
            <div class="tag-buttons">
                <h3>Filter by Prefered weapon</h3>
                <div>
                    <input name="tag" type="radio" id="t1" value="Swords" autocomplete="off">
                    <label for="t1">Swords/Shields</label>
                </div>
                <div>
                    <input name="tag" type="radio" id="t2" value="Bows" autocomplete="off">
                    <label for="t2">Bows</label>
                </div>
                <div>
                    <input name="tag" type="radio" id="t3" value="Magic" autocomplete="off">
                    <label for="t3">Magic</label>
                </div>
                <div>
                    <input name="tag" type="radio" id="t4" value="Spears" autocomplete="off">
                    <label for="t4">Spears</label>
                </div>
                <div>
                    <input name="tag" type="radio" id="t5" value="BigSwords" autocomplete="off">
                    <label for="t5">BigSwords</label>
                </div>
                <div>
                    <input name="tag" type="radio" id="t6" value="Other" autocomplete="off">
                    <label for="t6">Other</label>
                </div>
            </div>
            <div>
                <input type="submit" value="Filter">
            </div>
        </form>
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
                                <a href="{{ route('character.favourite', ['character' => $character]) }}"
                                   class="btn w-100 @if($character->users->contains(Auth::id()))
                                       btn-warning @else btn-outline-warning @endif">
                                    @if ($character->users->contains(Auth::id()))
                                        Remove from favourites <i class="bi bi-star-fill"></i>
                                    @else
                                        Add to favourites <i class="bi bi-star"></i>
                                    @endif
                                </a>
                                </div>
                        @endforeach

                </div>
             </div>
    </div>
@endsection
