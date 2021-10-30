@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-3 mb-5">
            <div class="col-8 border rounded border-1">
                <div class="text-center mt-2 mb-4 border-bottom border-primary border-2">
                    <h1 class="h2">Favourites</h1>
                    <h2 class="h5 mb-3">All of your favourites in one place</h2>
                </div>
    @foreach($favorites as $favorite)
        <tr>
            <td>
                <div class="mx-auto w-50">
                    <img class="img-fluid" src="{{ asset('storage/icon/' . $favorite->icon) }}"
                         alt="{{ $favorite->Name }} {{ $favorite->last_name }}">
                </div>
            </td>
            <td>{{ $favorite->Name }} {{ $favorite->Race }}</td>
            <td>
                <a href="/characters/{{ $favorite->id }}" class="btn btn-outline-primary">
                    See character <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
            </td>
        </tr>
    @endforeach
            </div>
        </div>
    </div>
@endsection
