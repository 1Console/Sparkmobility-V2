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
    <body class="overflow-y-auto antialiased text-gray-900">
        <div class="flex h-screen text-[#9E9E9E]">
            
                @include('partials.sidebar')

                <div class="flex-1 w-full px-10 py-8 mx-auto overflow-x-auto overflow-y-auto">
                    @yield('content')
                </div>         
            </div>
        </div>
    </body>
</html>
