<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Hello World</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="/">Homepage</a></div>
        <div><a class="navbar-brand" href="/characters">Characters</a></div>
        <div><a class="navbar-brand" href="/about">About</a></div>
        <div><a class="navbar-brand" href="/login">Login</a></div>
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="">Profile</a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
        @endguest
    </div>
</nav>
<div>
    <h1>{{$title}}</h1>
    <div class="container">
        <div class="row">
        @foreach($characters as $character)
            <div class="col-sm border border-dark rounded-0">
                <img src="{{$character->icon}}">
                <p>Character: {{$character->Name}} is een {{$character->Race}} en specialiseert in {{$character->proficiency}}</p>
                <a type="button" href="characters/{{ $character->id }}"  class="btn btn-outline-dark">Dit gaat ergens naartoe!</a>
                <a href="add-character" class="btn btn-primary btn-sm">Create</a>
                <a href="edit-character/{{$character->id}}" class="btn btn-primary btn-sm">Edit</a>
                <a type="button" href="delete/{{$character->id}}" class="btn btn-outline-dark">Delete</a>
            </div>
        @endforeach
        </div>
    </div>
</div>
</body>
</html>
