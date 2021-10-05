@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($favorites as $favorite)
    <img src="{{$favorite->icon}}">
    @endforeach
</div>
@endsection
