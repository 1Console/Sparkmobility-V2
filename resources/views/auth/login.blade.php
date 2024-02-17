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
        <div class="min-h-screen w-full flex sm:justify-center  pt-6 sm:p-0 bg-white dark:bg-gray-900">


            {{-- left --}}
            <div class=" w-1/2 flex items-center px-20">
                {{-- bg-red-300  --}}

                {{-- //actual left part --}}
                <div class=" p-20 w-full  ">
                    {{-- bg-green-300  --}}
                    <div class=" flex items-center space-x-2 justify-start max-w-2xl ">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0_76_66976" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="30" height="30">
                                <rect width="30" height="30" fill="url(#pattern0)" />
                            </mask>
                            <g mask="url(#mask0_76_66976)">
                                <rect x="-6" y="-4" width="39" height="40" fill="#4EA685" />
                            </g>
                            <defs>
                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                    <use xlink:href="#image0_76_66976" transform="scale(0.00271739)" />
                                </pattern>
                                <image id="image0_76_66976" width="368" height="368"
                                    xlink:href="data:image/png;base64,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" />
                            </defs>
                        </svg>
                        <p>Trekk</p>

                    </div>
                    <h1 class=" font-black text-black text-3xl mt-6">Welcome Back - Deploy!</h1>
                    <p class=" mt-1">Please enter your details to sign in</p>
                    <form action="" class="flex flex-col mt-8">
                        <input class=" rounded-full p-3" type="text" placeholder="example@gmail.com">
                        <input class=" rounded-full p-3 mt-3" type="text" placeholder="xxxxxxxxxxxxxxxxx">
                        <button></button>
                        <div class="flex items-center justify-between px-4 mt-6">
                            <div class="space-x-1 relative inline-flex items-center cursor-pointer">
                                <input type="checkbox" value="" class="sr-only peer">
                                <div
                                    class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                                </div>

                                {{-- <input type="checkbox" name="" id=""> --}}
                                <span>Remember me</span>
                            </div>
                            <div>
                                <p>Forgot Password?</p>
                            </div>
                        </div>

                        <button class=" w-full rounded-full p-4 mt-4 bg-[#282828] text-white">Sign in</button>
                        <p class="mt-5 text-center">Don't have an account? <strong>Create an account</strong> </p>
                    </form>
                </div>
            </div>

            {{-- right --}}
            <div class=" w-1/2 relative">
                {{-- bg-slate-500 --}}

                <div class="bg-cover bg-green-500 h-3/4 rounded-t-none pb-4 rounded-l-3xl">
                    <img class="w-full absolute bg-cover bg-center -top-2 h-3/4 rounded-l-3xl ml-2"
                        style="background-image: url('images/loginimage.png')" alt="">

                </div>
                <div class="flex flex-col ml-60">
                    <h1 class=" text-start flex pb-2 pr-20 font-black text-black text-3xl mt-6 w-full">We are redefining
                        <br> communities’ access to smart <br> and affordable mobility.
                    </h1>
                    <span class="text-start flex justify-start pb-2 text-sm text-[#8A8A8A]">Trekk Team</span>
                </div>

                {{-- <p class=" text-start flex justify-end "></p> --}}

            </div>

            {{-- <svg width="1106" class=" absolute inset-0" height="576" viewBox="0 0 1106 576" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-9 0C-9.55228 0 -10 0.447715 -10 1C-10 1.55228 -9.55228 2 -9 2V0ZM1094.67 570C1094.67 572.946 1097.05 575.333 1100 575.333C1102.95 575.333 1105.33 572.946 1105.33 570C1105.33 567.055 1102.95 564.667 1100 564.667C1097.05 564.667 1094.67 567.055 1094.67 570ZM-9 2C223.759 2 430.259 2.01273 613.849 73.0576C797.362 144.073 958.089 286.114 1099.1 570.444L1100.9 569.556C959.713 284.886 798.652 142.427 614.571 71.1924C430.567 -0.0127251 223.666 0 -9 0V2Z" fill="#C4E1D6"/>
            </svg> --}}

            {{-- <svg width="1106" class=" absolute inset-0" height="576" viewBox="0 0 1106 576" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M-9 0C-9.55228 0 -10 0.447715 -10 1C-10 1.55228 -9.55228 2 -9 2V0ZM1094.67 570C1094.67 572.946 1097.05 575.333 1100 575.333C1102.95 575.333 1105.33 572.946 1105.33 570C1105.33 567.055 1102.95 564.667 1100 564.667C1097.05 564.667 1094.67 567.055 1094.67 570ZM-9 2C223.759 2 430.259 2.01273 613.849 73.0576C797.362 144.073 958.089 286.114 1099.1 570.444L1100.9 569.556C959.713 284.886 798.652 142.427 614.571 71.1924C430.567 -0.0127251 223.666 0 -9 0V2Z" fill="#C4E1D6"/>
                <rect width="34" height="30.5" transform="translate(496.526 18.1198) rotate(15)" fill="white"/>
                <path d="M513.998 32.1189C515.061 32.4036 516.163 31.7672 516.448 30.7047C516.733 29.6422 516.096 28.5399 515.034 28.2552C513.971 27.9705 512.869 28.6069 512.584 29.6694C512.299 30.732 512.936 31.8342 513.998 32.1189ZM502.174 35.6798C499.469 34.9552 496.775 36.5108 496.05 39.2154C495.325 41.92 496.881 44.6144 499.586 45.3391C502.29 46.0638 504.985 44.5082 505.709 41.8036C506.434 39.099 504.878 36.4045 502.174 35.6798ZM499.974 43.8902C498.139 43.3985 497.007 41.4389 497.499 39.6036C497.991 37.7684 499.95 36.637 501.786 37.1287C503.621 37.6205 504.752 39.5801 504.26 41.4153C503.769 43.2506 501.809 44.382 499.974 43.8902ZM508.164 35.7321L511.104 34.0351L511.669 35.0148C512.419 36.3131 513.508 37.3502 514.972 37.9909C515.528 38.2332 516.174 37.9093 516.332 37.3201C516.459 36.8468 516.21 36.3453 515.767 36.1438C514.741 35.6827 513.999 34.9352 513.481 34.0508L512.137 31.7238C511.758 31.208 511.327 30.8854 510.747 30.7301C510.167 30.5748 509.633 30.6386 509.239 30.9473L505.81 32.9272C505.32 33.21 504.998 33.6412 504.868 34.1242C504.713 34.7038 504.777 35.2385 505.085 35.6318L507.452 39.1646L506.416 43.0283C506.274 43.5596 506.592 44.1107 507.124 44.2531C507.655 44.3954 508.206 44.0772 508.348 43.546L509.487 39.2959C509.622 38.7936 509.555 38.2685 509.313 37.8206L508.164 35.7321ZM515.697 39.3033C512.992 38.5786 510.298 40.1343 509.573 42.8388C508.848 45.5434 510.404 48.2379 513.109 48.9626C515.813 49.6873 518.508 48.1316 519.232 45.427C519.957 42.7224 518.401 40.028 515.697 39.3033ZM513.497 47.5137C511.662 47.0219 510.53 45.0623 511.022 43.2271C511.514 41.3918 513.473 40.2604 515.309 40.7522C517.144 41.244 518.275 43.2036 517.783 45.0388C517.292 46.8741 515.332 48.0054 513.497 47.5137Z" fill="#4EA685"/>
                </svg> --}}
            {{--
                <svg width="1106" height="576" viewBox="0 0 1106 576" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M-9 0C-9.55228 0 -10 0.447715 -10 1C-10 1.55228 -9.55228 2 -9 2V0ZM1094.67 570C1094.67 572.946 1097.05 575.333 1100 575.333C1102.95 575.333 1105.33 572.946 1105.33 570C1105.33 567.055 1102.95 564.667 1100 564.667C1097.05 564.667 1094.67 567.055 1094.67 570ZM-9 2C223.759 2 430.259 2.01273 613.849 73.0576C797.362 144.073 958.089 286.114 1099.1 570.444L1100.9 569.556C959.713 284.886 798.652 142.427 614.571 71.1924C430.567 -0.0127251 223.666 0 -9 0V2Z" fill="#C4E1D6"/>
                    </svg>
                     --}}


        </div>
        </div>
    </body>

</html>