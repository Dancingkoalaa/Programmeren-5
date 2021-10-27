@extends('layouts.app')

@section('content')
<div class="container">
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
@endsection
