<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="/">Homepage</a></div>
        <div><a class="navbar-brand" href="/characters">Characters</a></div>
        <div><a class="navbar-brand" href="/about">About</a></div>
        <div><a class="navbar-brand" href="/login">Login</a></div>
        <div><a class="navbar-brand" href="/registreer">Register</a></div>
    </div>
</nav>
<div>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($characters as $character)
            <li><a href="characters/{{ $character->id }}">Character: {{$character->Name}} is een {{$character->Race}} en specialiseert in {{$character->proficiency}}</a></li>
        @endforeach
    </ul>
</div>
</body>
</html>
