<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- Animate Css -->
    <link rel="stylesheet" href="{{ asset('css/template/plugins/animate.css') }}">
    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('css/template/style.css') }}">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="{{ asset('css/template/fonts/flaticon.css') }}">
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="{{ asset('css/template/plugins/nice-select.v1.0.css') }}">

    <title>@yield('title')</title>
</head>
<body class="container mt-5">
<div class="content w-100 mb-5">
    <div id="app">
        @yield('content')
    </div>
</div>
<script src="{{ asset('js/template/jqurey.v3.6.0.min.js') }}"></script><!-- Jquery v3.6.0 Js -->
<script src="{{ asset('js/template/plugin/nice-select.v1.0.min.js') }}"></script><!-- Nice Select Js -->
<script>
    $(document).ready(function() {
        $('select').niceSelect();
    });
</script>
</body>
</html>
