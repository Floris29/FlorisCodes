<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon"/>

</head>

<body style="height:100vh" class="bg-main-bg">
    <x-header />

    @yield('content')
</body>

<x-footer />

</html>
