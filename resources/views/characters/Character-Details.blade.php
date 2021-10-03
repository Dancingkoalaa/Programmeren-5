<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
    <div class="col-7 border m-2 pb-3 align-self-start">
        <h1 class="h2 mt-3">Character: {{$character->Name}} is een {{$character->Race}}</h1>
        <p class="lead"></p>
        <p>
            {{$character->proficiency}}
        </p>
    </div>
</div>
</body>
</html>
