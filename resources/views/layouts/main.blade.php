<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nerds - @yield('subtitle')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
@include('common.header')
@yield('content')
@include('common.footer')
@include('common.components.modal')
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
