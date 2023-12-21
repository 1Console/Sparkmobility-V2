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
    <body class="font-sans text-gray-900 antialiased overflow-y-auto">
        <div class="flex h-screen text-[#9E9E9E]  bg-white dark:bg-gray-900">
            
                @include('partials.sidebar')

                <div class=" bg-white flex-1 mx-auto  w-full px-10  py-4 overflow-x-auto overflow-y-auto">
                    @yield('content')
                </div>

            
                {{-- left --}}
                {{-- <div class=" bg-white flex-none  w-96 px-6 py-4 text-sm overflow-y-auto">
              
                        
                    
                </div> --}}

                {{-- center --}}
                {{-- <div class=" bg-white flex-1 mx-auto  w-full px-10  py-4 overflow-x-auto overflow-y-auto">
                        
                </div> --}}

                {{-- right i--}}
                {{-- <div class=" bg-white  w-[24rem]">
                
                    
                </div> --}}
               
            </div>
        </div>
    </body>
</html>
