<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" app-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex flex-row h-screen w-screen bg-second-50">
    <!-- Page Navigation Menu -->
    <div class="h-screen w-1.55/10 flex justify-center items-center">
        @include('layouts.navigation')
    </div>

    <div class="h-screen w-8.45/10 bg-second-50">
        <!-- Page Header -->
        <div class="h-1/10 flex items-center">
            @include('layouts.header')
        </div>

        <!-- Page Content -->
        <div class="h-8.85/10 w-9.92/10 bg-gray-200 rounded-xl">
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
    <script src="{{ asset('assets/app-x.js') }}"></script>
</body>

</html>