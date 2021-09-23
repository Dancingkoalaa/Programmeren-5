<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Hello World</title>
</head>
<body>
<nav class="relative flex bg-gray-100 dark:bg-gray-900">
    <div class="underline text-gray-900 dark:text-white"><a href="/">Homepage</a></div>
    <div class="underline text-gray-900 dark:text-white"><a href="/">Characters</a></div>
    <div class="underline text-gray-900 dark:text-white"><a href="/about">About</a></div>
    <div class="underline text-gray-900 dark:text-white"><a href="/login">Login</a></div>
    <div class="underline text-gray-900 dark:text-white"><a href="/">Register</a></div>
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
