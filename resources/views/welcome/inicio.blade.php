<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-screen w.screen">
        <header class="h-1/10 w-full bg-red-500">
            @include('welcome.partials.nav-landing')
        </header>
        <main class="h-9/10 w-full">
            <h1>
                inicio
            </h1>
        </main>
    </body>
</html>