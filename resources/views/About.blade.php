<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>Hello World</title>
    </head>
    <body>
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
