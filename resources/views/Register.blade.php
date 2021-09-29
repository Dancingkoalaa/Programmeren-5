<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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
    <div>
        <h1>{{$title}}</h1>
        <form method="get" action="/about">
            <a>
            <label for="username">{{$username}}</label>
            <input type="text" id="username" name="username">
            </a>
            <a>
            <label for="password">{{$password}}</label>
            <input type="text" id="username" name="username">
            </a>
            <a>
                <label for="password">{{$password}}</label>
                <input type="text" id="username" name="username">
            </a>
            <input type="submit" name="submit" value="Log in">
            <a href="">Forgot password?</a>
        </form>
    </div>
</div>
</body>
</html>
