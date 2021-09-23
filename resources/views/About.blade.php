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
        <div class="underline text-gray-900 dark:text-white"><a href="/Register">Register</a></div>
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
