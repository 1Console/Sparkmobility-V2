<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Trekk Admin Dashboard</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        {{-- <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> --}}
        
    </head>

    <body class="antialiased">
        @include('partials.navbar')

        <div class="flex h-screen">
            @include('partials.sidebar')

            <main class="bg-neutral-100 flex-1 w-full mx-auto overflow-y-auto">
                @yield('content')
            </main>
        </div>
        </div>
    </body>

</html>