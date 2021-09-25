<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Hello World</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

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
            <p>{{$paragraph}}</p>
            <ul>
            @foreach($TestingArray as $TestingArray)
                <li>{{$TestingArray['TestA']}}</li>
            @endforeach
            </ul>
        </div>
    </body>
</html>
