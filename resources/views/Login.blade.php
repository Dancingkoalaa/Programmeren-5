@extends('layouts.app')

@section('content')
    <div>
        <div>
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
@endsection
