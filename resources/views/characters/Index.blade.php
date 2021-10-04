<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light border border-dark">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="/">Homepage</a></div>
        <div><a class="navbar-brand" href="/characters">Characters</a></div>
        <div><a class="navbar-brand" href="/about">About</a></div>
        <div><a class="navbar-brand" href="/login">Login</a></div>
    </div>
</nav>
<div>
    <h1>{{$title}}</h1>
    <div class="container">
        <div class="row">
        @foreach($characters as $character)
            <div class="col-sm border border-dark rounded-0">
                <img src="{{$character->icon}}">
                <p>Character: {{$character->Name}} is een {{$character->Race}} en specialiseert in {{$character->proficiency}}</p>
                <a type="button" href="characters/{{ $character->id }}"  class="btn btn-outline-dark">Dit gaat ergens naartoe!</a>
            </div>
        @endforeach
        </div>
    </div>
</div>
</body>
</html>
