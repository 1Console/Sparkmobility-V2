<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name.app_name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans text-gray-900 antialiased overflow-x-hidden overflow-y-auto ">
        <div class="min-h-screen w-full flex sm:justify-center pt-6 sm:p-0 bg-white dark:bg-gray-900">
				@yield('content')
			</div>
        </div>
    </body>

</html>