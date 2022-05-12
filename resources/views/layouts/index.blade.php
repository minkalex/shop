<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('css/template/plugin/animate.css') }}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">

    <title>@yield('title')</title>
</head>
<body class="container mt-5">
<div class="content w-100 mb-5">
    @if(Auth::check())
        <div class="d-flex justify-content-end dropdown mb-3">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2"
               data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2" style="font-size: 85%">
                <li><a class="dropdown-item" href="{{ route('home') }}/profile">profile</a></li>
                <li><a class="dropdown-item" href="{{ route('home') }}/users/{{ Auth::user()->id }}/edit">edit</a></li>
                <hr>
                <li><a class="dropdown-item" href="{{ route('home') }}/logout">sign out</a></li>
            </ul>
        </div>
    @else
        <div class="d-flex justify-content-end">
            <div class="btn-group mb-5" role="group" aria-label="Basic outlined example">
                <a href="{{ route('home') }}/login" class="btn btn-outline-success">login</a>
                <a href="{{ route('home') }}/signup" class="btn btn-outline-success">sign-up</a>
            </div>
        </div>
    @endif
        <div id="app">
            @yield('content')
        </div>
</div>
</body>
</html>
