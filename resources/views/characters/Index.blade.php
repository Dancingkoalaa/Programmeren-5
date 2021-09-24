<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
</head>
<body>
<nav>
    <div><a href="/">Homepage</a></div>
    <div><a href="/characters">Characters</a></div>
    <div><a href="/about">About</a></div>
    <div><a href="/login">Login</a></div>
    <div><a href="/registreer">Register</a></div>
</nav>
<div>
    <h1>{{$title}}</h1>
    <ul>
        @foreach($characters as $characters)
            <li>Character: {{$characters->Name}} is een {{$characters->Race}} en specialiseert in {{$characters->proficiency}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
