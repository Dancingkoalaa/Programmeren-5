@extends('layouts.app')

@section('content')
<div>
    <div class="col-7 border m-2 pb-3 align-self-start">
        <h1 class="h2 mt-3">Character: {{$character->Name}} is een {{$character->Race}}</h1>
        <p class="lead"></p>
        <img src="{{asset('storage/portrait/' . $character->portrait)}}">
        <p>
            {{$character->proficiency}}
        </p>
    </div>
</div>
@endsection
