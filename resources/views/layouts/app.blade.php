<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('/build/assets/app.css') }}">
        <script src="{{ asset('/build/assets/app2.js') }}" defer></script>
        <link rel="favicon" href="{{ asset('../img/favicon.ico') }}" type="image/x-icon" />
        <script src="https://kit.fontawesome.com/aab1cdc4fa.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body>
        <div class="min-h-screen bg-main-bg">
            @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
