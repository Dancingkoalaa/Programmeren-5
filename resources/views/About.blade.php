@extends('layouts.app')

@section('content')
        <div>
            <h1>{{$title}}</h1>
            <p>{{$paragraph}}</p>
            <ul>
            @foreach($TestingArray as $TestingArray)
                <li>{{$TestingArray['TestA']}}</li>
            @endforeach
            </ul>
        </div>
@endsection
