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
    <h1>{{$title}}</h1>
    <ul>
        @foreach($characters as $characters)
            <li>Character: {{$characters->Name}} is een {{$characters->Race}} en specialiseert in {{$characters->proficiency}}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
