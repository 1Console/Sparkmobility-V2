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

    </head>

    <body class="antialiased">
        @include('partials.navbar')

        <div class="flex h-screen">
            @include('partials.sidebar')

            <main class="bg-neutral-100 flex-1 w-full mx-auto overflow-y-auto mt-20 md:mt-16">
                @yield('content')
            </main>
        </div>

        <div class="bg-white flex justify-center grow p-6 md:hidden">
            <span class="mt-auto text-xs text-gray-500 font-thin">Powered by Trekk</span>
          </div>
    </body>

</html>