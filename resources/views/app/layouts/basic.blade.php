<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SG - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('storage/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/create-style.css') }}">
</head>

<body>
<div class="container-home">
    @include('app.layouts._partials.header')
    @yield('content')
</div>

    <script src="{{ asset('storage/jquery/jquery.js') }}"></script>
    <script src="{{ asset('storage/bootstrap/bootstrap.bundle.js') }}"></script>
</body>
</html>
