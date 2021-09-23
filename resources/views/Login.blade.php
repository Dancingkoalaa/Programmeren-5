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
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8 dark:text-white">
            <h1>{{$title}}</h1>
            <form method="get" action="/about">
                    {{$username}}
                <input>
                    {{$password}}
                <input>
                <button type="submit">{{$title}}</button>
            </form>
        </div>
    </div>
</body>
</html>
