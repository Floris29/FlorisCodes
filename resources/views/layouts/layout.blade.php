<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('/build/assets/app-BF8t0AuM.css') }}">
    <script src="{{ asset('/build/assets/app-BmPVpHs_.js') }}" defer></script>
    <link rel="favicon" href="{{ asset('../img/favicon.ico') }}" type="image/x-icon" />
    <script src="https://kit.fontawesome.com/aab1cdc4fa.js" crossorigin="anonymous"></script>

</head>

<body class="bg-main-bg">

    @yield('content')
</body>

</html>
