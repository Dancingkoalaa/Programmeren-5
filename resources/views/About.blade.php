<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Hello World</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
            <p>{{$paragraph}}</p>
            <ul>
            @foreach($TestingArray as $TestingArray)
                <li>{{$TestingArray['TestA']}}</li>
            @endforeach
            </ul>
        </div>
    </body>
</html>
