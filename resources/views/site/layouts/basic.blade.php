<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Gestão -  @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('storage/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/css/default.css') }}">
</head>
    <body>
        @include('site.layouts._partials.header')
        @yield('content')

        <script src="{{ asset('storage/jquery/jquery.js') }}"></script>
        <script src="{{ asset('storage/bootstrap/bootstrap.bundle.js') }}"></script>
    </body>
</html>
