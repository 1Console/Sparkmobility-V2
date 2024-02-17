<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>E dey Work</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])



    </head>

    <body class="font-sans text-gray-900 antialiased overflow-y-auto ">
        <div class="flex h-screen text-[#9E9E9E]  bg-white dark:bg-gray-900">


            <div class=" bg-white flex-none  w-96 px-6 py-4 text-sm overflow-y-auto ">
                <div class=" space-x-6  ">
                    <h2 class="font-black">ACTIVE ACCOUNTS &nbsp; <button
                            class=" bg-[#DCEDE7] rounded-2xl inline py-1 px-3 ">500</button></h2>
                    {{-- <button class=""></button> --}}
                </div>
                <div class="flex items-center justify-start mt-3">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage1.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage3.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage4.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage5.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage5.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage5.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage5.png" alt="">
                    <img class=" -m-1 h-10 w-10" src="images/partners/partnerImage5.png" alt="">
                </div>

                <h2 class=" font-thin mt-5">ADMIN ACCESS </h2>

                <ul class="flex flex-col space-y-4 text-sm text-black">
                    <li class="mt-4 flex items-center justify-between">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/dashboard.jpg" alt="">
                            <a class=" text-[#4EA685]" href="">Dashboard</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/commands.png" alt="">
                            <a class="text-[#000000]" href="">Commands</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Fleet Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Vehicle Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Riders Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Marketing Campaigns</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Promos</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Pricing Plan Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Tickets Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                    <li class="mt-4 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Organization</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                </ul>

                <h2 class=" font-thin mt-5">ACCOUNT MANAGEMENT </h2>

                <ul class=" space-y-4 text-sm">
                    <li class="mt-6 flex items-center justify-between">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/settings.png" alt="">
                            <a class=" text-[#4EA685]" href="">Settings</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/logout.png" alt="">
                            <a class="text-[#000000]" href="">Logout</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                </ul>

                <h4 class=" font-thin mt-5">Powered By: Trekk</h4>



            </div>

            {{-- left --}}
            <div class=" bg-white flex-none  w-96 px-6 py-4 text-sm overflow-y-auto ">
                <div class=" space-x-6  ">
                    <h2 class="font-black">ACTIVE ACCOUNTS &nbsp; <button
                            class=" bg-[#DCEDE7] rounded-2xl inline py-1 px-3 ">500</button></h2>
                    {{-- <button class=""></button> --}}
                </div>
                <div class="flex items-center justify-start mt-3">
                    <img class=" -m-1" src="images/partners/partnerImage1.png" alt="">
                    <img class=" -m-1" src="images/partners/partnerImage3.png" alt="">
                    <img class=" -m-1" src="images/partners/partnerImage4.png" alt="">
                    <img class=" -m-1" src="images/partners/partnerImage5.png" alt="">
                    <img class=" -m-3" src="images/partners/partnerImage7.png" alt="">
                </div>

                <h2 class=" font-thin mt-10">ADMIN ACCESS </h2>

                <ul class="flex flex-col space-y-5 text-base">
                    <li class="mt-6 flex items-center justify-between">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/dashboard.jpg" alt="">
                            <a class=" text-[#4EA685]" href="">Dashboard</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/commands.png" alt="">
                            <a class="text-[#000000]" href="">Commands</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Fleet Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Vehicle Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Riders Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Marketing Campaigns</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Promos</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Pricing Plan Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Tickets Management</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                    <li class="mt-4 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/fleet.png" alt="">
                            <a class="text-[#000000]"> Organization</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                </ul>

                <h2 class=" font-thin mt-10">ACCOUNT MANAGEMENT </h2>

                <ul class=" space-y-6 text-base">
                    <li class="mt-6 flex items-center justify-between">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/settings.png" alt="">
                            <a class=" text-[#4EA685]" href="">Settings</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>
                    <li class="mt-2 flex items-center justify-between space-x-2">
                        <div class="flex justify-start   space-x-2">
                            <img src="images/sidebarIcons/logout.png" alt="">
                            <a class="text-[#000000]" href="">Logout</a>
                        </div>
                        <div>
                            <img src="images/sidebarIcons/chevron-down-small.png" alt="">
                        </div>
                    </li>

                </ul>

                <h4 class=" font-thin mt-10">Powered By: Trekk</h4>





            </div>

            {{-- center --}}
            <div class=" bg-white flex-1 mx-auto  w-full px-10  py-4 overflow-x-auto overflow-y-auto ">
                <div class="relative w-full">
                    <input type="text" class=" w-full px-8 outline-none outline-white rounded-2xl "
                        placeholder=" Search...">
                    <a href="#">
                        {{-- <img src="images/formIcons/search.png" class="absolute inset-0 mt-3 ml-2" alt=""> --}}
                        <svg class="absolute inset-0 mt-3 ml-2" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9.16663 16.6667C13.3088 16.6667 16.6666 13.3088 16.6666 9.16666C16.6666 5.02452 13.3088 1.66666 9.16663 1.66666C5.02449 1.66666 1.66663 5.02452 1.66663 9.16666C1.66663 13.3088 5.02449 16.6667 9.16663 16.6667Z"
                                stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M15.7749 17.2415C16.2166 18.5748 17.2249 18.7082 17.9999 17.5415C18.7082 16.4748 18.2416 15.5998 16.9582 15.5998C16.0082 15.5915 15.4749 16.3332 15.7749 17.2415Z"
                                stroke="#121212" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                    </a>
                </div>
                <div class=" mt-10 text-black">
                    <h1 class=" font-black text-black text-3xl mt-6">Overview</h1>
                    <p class="mt-4">Dashboard overview of all major operations</p>
                </div>

                <div class=" flex mt-12 items-center justify-start space-x-28 px-0 text-black">
                    <div class="flex space-x-2">
                        {{-- <img src="images/riders.png" class=" bg-center bg-cover w-auto h-auto" alt="" /> --}}
                        <svg width="40" height="48" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.8333 9.16667C27.6667 9.16667 29.1667 7.66667 29.1667 5.83333C29.1667 4 27.6667 2.5 25.8333 2.5C24 2.5 22.5 4 22.5 5.83333C22.5 7.66667 24 9.16667 25.8333 9.16667ZM8.33333 20C3.66667 20 0 23.6667 0 28.3333C0 33 3.66667 36.6667 8.33333 36.6667C13 36.6667 16.6667 33 16.6667 28.3333C16.6667 23.6667 13 20 8.33333 20ZM8.33333 34.1667C5.16667 34.1667 2.5 31.5 2.5 28.3333C2.5 25.1667 5.16667 22.5 8.33333 22.5C11.5 22.5 14.1667 25.1667 14.1667 28.3333C14.1667 31.5 11.5 34.1667 8.33333 34.1667ZM18 17.5L22 13.5L23.3333 14.8333C25.1 16.6 27.3 17.8 29.9333 18.2C30.9333 18.35 31.8333 17.55 31.8333 16.5333C31.8333 15.7167 31.2167 15.0167 30.4167 14.8833C28.5667 14.5833 27.05 13.7 25.8333 12.5L22.6667 9.33333C21.8333 8.66667 21 8.33333 20 8.33333C19 8.33333 18.1667 8.66667 17.6667 9.33333L13 14C12.3333 14.6667 12 15.5 12 16.3333C12 17.3333 12.3333 18.1667 13 18.6667L18.3333 23.3333V30C18.3333 30.9167 19.0833 31.6667 20 31.6667C20.9167 31.6667 21.6667 30.9167 21.6667 30V22.6667C21.6667 21.8 21.3333 20.9833 20.75 20.3667L18 17.5ZM31.6667 20C27 20 23.3333 23.6667 23.3333 28.3333C23.3333 33 27 36.6667 31.6667 36.6667C36.3333 36.6667 40 33 40 28.3333C40 23.6667 36.3333 20 31.6667 20ZM31.6667 34.1667C28.5 34.1667 25.8333 31.5 25.8333 28.3333C25.8333 25.1667 28.5 22.5 31.6667 22.5C34.8333 22.5 37.5 25.1667 37.5 28.3333C37.5 31.5 34.8333 34.1667 31.6667 34.1667Z"
                                fill="#C4E1D6" />
                        </svg>

                        <div class="relative">
                            <h3 class=" text-xl font-black text-[#727272]">Riders</h3>
                            <p class="text-xs">Manage all riders</p>
                            <button
                                class="absolute -top-1 -right-10 bg-[#DCEDE7] text-[#4EA685] text-[0.6rem] w-27 rounded-2xl inline py-1 px-2 ">
                                <span class="font-black">05</span> active</button>
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        {{-- <img src="images/fleets.png" class=" bg-center bg-cover w-auto h-auto" alt="" /> --}}
                        <svg width="40" height="48" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 26.4944C21.9788 26.4944 24.3833 24.0899 24.3833 21.1111C24.3833 19.1013 23.2887 17.3428 21.6917 16.4276L4.2676 6.34282L14.1909 23.5336C15.0881 25.2922 16.9005 26.4944 19 26.4944ZM19 3.16666C15.752 3.16666 12.7194 4.06388 10.0816 5.53532L13.8499 7.7066C15.4111 7.09649 17.2055 6.75554 19 6.75554C26.9314 6.75554 33.3555 13.1797 33.3555 21.1111C33.3555 25.0768 31.7585 28.6657 29.1565 31.2497H29.1386C28.9722 31.4157 28.8403 31.6129 28.7502 31.83C28.6602 32.0471 28.6138 32.2798 28.6138 32.5148C28.6138 32.7498 28.6602 32.9825 28.7502 33.1996C28.8403 33.4167 28.9722 33.6139 29.1386 33.7799C29.8384 34.4797 30.9869 34.4797 31.6867 33.7978C33.3556 32.1337 34.6792 30.1563 35.5815 27.9791C36.4838 25.8019 36.947 23.4679 36.9444 21.1111C36.9444 11.2417 28.8694 3.16666 19 3.16666ZM1.05554 21.1111C1.05554 26.0638 3.06532 30.5499 6.31326 33.7978C7.0131 34.4797 8.1436 34.4797 8.84343 33.7799C9.00978 33.6139 9.14176 33.4167 9.23181 33.1996C9.32186 32.9825 9.36821 32.7498 9.36821 32.5148C9.36821 32.2798 9.32186 32.0471 9.23181 31.83C9.14176 31.6129 9.00978 31.4157 8.84343 31.2497C7.5089 29.9206 6.45076 28.3404 5.73007 26.6003C5.00938 24.8602 4.6404 22.9946 4.64443 21.1111C4.64443 19.3167 4.98537 17.5222 5.61343 15.9072L3.44215 12.1389C1.95276 14.8305 1.05554 17.8452 1.05554 21.1111Z"
                                fill="#C4E1D6" />
                        </svg>

                        <div class="relative">
                            <h3 class=" text-xl font-black text-[#727272]">Fleets</h3>
                            <p class="text-xs">Manage all fleets</p>
                            <button
                                class="absolute -top-1 -right-10 bg-[#DCEDE7] text-[#4EA685] text-[0.6rem] w-27 rounded-2xl inline py-1 px-2 ">
                                <span class="font-black">200</span> added</button>

                        </div>
                    </div>
                    <div class="flex space-x-2">
                        {{-- <img src="images/vehicles.png" class=" bg-center bg-cover w-auto h-auto" alt="" /> --}}
                        <svg width="40" height="48" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_56_52708)">
                                <path
                                    d="M27.3667 6.66666C27.9078 6.66661 28.4408 6.79829 28.9197 7.05034C29.3985 7.30239 29.8088 7.66722 30.115 8.11332L30.26 8.34666L36.2267 18.7883C36.4662 19.2076 36.6118 19.6739 36.6534 20.155L36.6667 20.4433V27.94C36.6667 28.3533 36.5899 28.7631 36.44 29.1483L36.315 29.4317L34.4517 33.1567C34.1954 33.6699 33.811 34.1083 33.3357 34.4295C32.8604 34.7507 32.3102 34.9437 31.7384 34.99L31.47 35H28.3334C27.4924 35.0003 26.6824 34.6826 26.0658 34.1108C25.4492 33.539 25.0714 32.7552 25.0084 31.9167L25 31.6667H15C15.0003 32.5076 14.6827 33.3176 14.1109 33.9342C13.5391 34.5509 12.7553 34.9286 11.9167 34.9917L11.6667 35H8.53004C7.95695 34.9998 7.39359 34.8518 6.89437 34.5704C6.39514 34.2889 5.9769 33.8835 5.68004 33.3933L5.54837 33.1567L3.68504 29.43C3.50057 29.0604 3.3864 28.6597 3.34837 28.2483L3.33337 27.94V20.4433C3.33336 19.9611 3.43799 19.4845 3.64004 19.0467L3.77337 18.7883L9.74004 8.34666C10.0085 7.87678 10.3874 7.47934 10.8438 7.18867C11.3003 6.898 11.8207 6.72284 12.36 6.67832L12.6334 6.66666H27.3667ZM27.3667 9.99999H12.6334L6.66671 20.4433V27.94L8.53004 31.6667H11.6667V30.1667C11.6665 29.7149 11.8331 29.2789 12.1345 28.9425C12.4359 28.606 12.851 28.3926 13.3 28.3433L13.5 28.3333H26.5C26.9518 28.3331 27.3877 28.4997 27.7242 28.8011C28.0607 29.1025 28.2741 29.5176 28.3234 29.9667L28.3334 30.1667V31.6667H31.47L33.3334 27.94V20.4433L27.3667 9.99999ZM27.59 18.5083C27.9853 18.3116 28.4424 18.2797 28.8611 18.4197C29.2799 18.5597 29.6259 18.8601 29.8234 19.255C30.0167 19.6513 30.0467 20.1077 29.9071 20.5259C29.7675 20.9442 29.4693 21.2909 29.0767 21.4917C26.3367 22.8583 23.0167 23.3333 20 23.3333C16.9234 23.3333 13.7167 22.8633 10.93 21.495C10.5376 21.2932 10.2393 20.9462 10.0986 20.5279C9.95794 20.1096 9.98595 19.653 10.1767 19.255C10.3629 18.8909 10.6756 18.6072 11.0561 18.4571C11.4366 18.3071 11.8587 18.301 12.2434 18.44L12.6884 18.6317L13.095 18.7933L13.46 18.9267L13.8934 19.07L14.3967 19.2233L14.9634 19.375L15.5917 19.525L16.2767 19.6617C17.5051 19.8866 18.7513 19.9998 20 20C22.5267 20 25.28 19.6133 27.59 18.5083Z"
                                    fill="#C4E1D6" />
                            </g>
                            <defs>
                                <clipPath id="clip0_56_52708">
                                    <rect width="40" height="40" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                        <div class="relative">
                            <h3 class=" text-xl font-black text-[#727272]">Vehicles</h3>
                            <p class="text-xs">Manage all vehicles</p>
                            <button
                                class="absolute -top-3 -right-12 bg-[#DCEDE7] text-[#4EA685] text-[0.6rem] w-27 rounded-2xl inline py-1 px-2 ">
                                <span class="font-black">1000</span> added</button>

                        </div>
                    </div>
                </div>

                <div class=" mt-14 px-0 mx-0 flex items-center justify-between">
                    <div class=" space-y-1">
                        <h3 class=" text-[#727272] text-lg font-extrabold">Management Insight</h3>
                        <p>Monitor admin performance by month and year</p>
                    </div>
                    <div>
                        <select name="" id="" class="rounded-full font-extrabold w-full">
                            <option class="" value="">April 1st - 30th, 2023</option>
                        </select>
                    </div>
                </div>

                <div class=" flex px-0 m-0 justify-center mt-10 w-full">
                    {{-- //graph as image for now --}}
                    {{-- <img src="" alt=""> --}}
                    <svg height="206" viewBox="0 0 588 206" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.0192 162.095L28.749 149.348L39.572 162.095L44.6652 153.809L52.305 162.095L59.9447 153.809L72.041 162.095H87.9572L108.967 118.118L124.883 30.8004L135.706 100.909L152.895 109.832L163.718 100.909L177.088 114.931L193.004 109.832L203.827 72.8656L212.103 84.9753L226.746 1.48225L233.749 21.8775L251.576 35.8992L262.399 25.0643L268.765 7.21841L276.405 25.0643L292.321 35.8992L309.511 95.1729L321.607 45.4595L335.613 30.8004L350.256 45.4595L361.079 21.8775L368.082 35.8992L387.182 49.2836L408.828 45.4595L424.744 25.0643L447.663 100.909L463.579 109.832L476.949 84.9753L484.589 100.909L501.141 109.832L508.145 132.777L518.331 104.733L535.52 84.9753L545.707 109.832L555.256 72.8656"
                            stroke="#A9DFD8" stroke-width="3" />
                        <path
                            d="M24.13 200.08C23.7567 199.447 23.57 198.563 23.57 197.43C23.57 196.303 23.7567 195.427 24.13 194.8C24.5033 194.167 25.15 193.85 26.07 193.85C26.99 193.85 27.6367 194.167 28.01 194.8C28.39 195.433 28.58 196.31 28.58 197.43C28.58 198.563 28.39 199.447 28.01 200.08C27.6367 200.713 26.99 201.03 26.07 201.03C25.15 201.03 24.5033 200.713 24.13 200.08ZM27.55 198.89C27.6367 198.497 27.68 198.01 27.68 197.43C27.68 196.857 27.6367 196.377 27.55 195.99C27.47 195.603 27.3133 195.297 27.08 195.07C26.8467 194.837 26.51 194.72 26.07 194.72C25.6367 194.72 25.3033 194.837 25.07 195.07C24.8367 195.297 24.6767 195.603 24.59 195.99C24.51 196.377 24.47 196.857 24.47 197.43C24.47 198.01 24.51 198.497 24.59 198.89C24.6767 199.277 24.8367 199.587 25.07 199.82C25.3033 200.053 25.6367 200.17 26.07 200.17C26.51 200.17 26.8467 200.053 27.08 199.82C27.3133 199.587 27.47 199.277 27.55 198.89ZM29.2726 194.8V193.95H31.2926V201H30.3326V194.8H29.2726ZM39.3444 199.37H36.2444L35.6544 201H34.6744L37.2844 194.08H38.3144L40.9144 201H39.9344L39.3444 199.37ZM39.0844 198.66L37.7944 195.1L36.5044 198.66H39.0844ZM44.8655 195.44C45.3521 195.44 45.7855 195.553 46.1655 195.78C46.5455 196.007 46.8421 196.333 47.0555 196.76C47.2755 197.187 47.3855 197.687 47.3855 198.26C47.3855 198.833 47.2755 199.333 47.0555 199.76C46.8421 200.18 46.5455 200.503 46.1655 200.73C45.7855 200.957 45.3521 201.07 44.8655 201.07C44.3321 201.07 43.8788 200.937 43.5055 200.67C43.1388 200.397 42.8855 200.04 42.7455 199.6V203.6H41.8355V195.51H42.7455V196.91C42.8855 196.47 43.1388 196.117 43.5055 195.85C43.8788 195.577 44.3321 195.44 44.8655 195.44ZM44.6055 196.25C44.2521 196.25 43.9321 196.333 43.6455 196.5C43.3588 196.66 43.1355 196.893 42.9755 197.2C42.8155 197.507 42.7355 197.86 42.7355 198.26C42.7355 198.66 42.8155 199.013 42.9755 199.32C43.1355 199.62 43.3588 199.853 43.6455 200.02C43.9321 200.187 44.2521 200.27 44.6055 200.27C45.1721 200.27 45.6221 200.093 45.9555 199.74C46.2955 199.38 46.4655 198.887 46.4655 198.26C46.4655 197.633 46.2955 197.143 45.9555 196.79C45.6221 196.43 45.1721 196.25 44.6055 196.25ZM49.4838 196.62C49.6638 196.24 49.9271 195.947 50.2738 195.74C50.6204 195.527 51.0338 195.42 51.5138 195.42V196.41H51.2338C50.7204 196.41 50.3004 196.543 49.9738 196.81C49.6471 197.07 49.4838 197.503 49.4838 198.11V201H48.5738V195.51H49.4838V196.62ZM52.2516 193.9C52.2516 193.733 52.3083 193.6 52.4216 193.5C52.535 193.393 52.685 193.34 52.8716 193.34C53.0583 193.34 53.2083 193.393 53.3216 193.5C53.435 193.6 53.4916 193.733 53.4916 193.9C53.4916 194.067 53.435 194.203 53.3216 194.31C53.2083 194.41 53.0583 194.46 52.8716 194.46C52.685 194.46 52.535 194.41 52.4216 194.31C52.3083 194.203 52.2516 194.067 52.2516 193.9ZM53.3216 195.51V201H52.4116V195.51H53.3216ZM55.6947 193.6V201H54.7847V193.6H55.6947Z"
                            fill="black" />
                        <path
                            d="M281.13 194.939V194.089H283.15V201.139H282.19V194.939H281.13ZM289.191 194.809H285.571V197.169C285.738 196.942 285.978 196.762 286.291 196.629C286.604 196.495 286.948 196.429 287.321 196.429C287.821 196.429 288.234 196.535 288.561 196.749C288.894 196.955 289.138 197.232 289.291 197.579C289.451 197.919 289.531 198.299 289.531 198.719C289.531 199.445 289.328 200.039 288.921 200.499C288.514 200.959 287.918 201.189 287.131 201.189C286.424 201.189 285.848 200.999 285.401 200.619C284.954 200.232 284.704 199.715 284.651 199.069H285.551C285.624 199.482 285.794 199.805 286.061 200.039C286.334 200.265 286.678 200.379 287.091 200.379C287.604 200.379 287.991 200.225 288.251 199.919C288.511 199.612 288.641 199.209 288.641 198.709C288.641 198.222 288.508 197.842 288.241 197.569C287.974 197.295 287.598 197.159 287.111 197.159C286.764 197.159 286.461 197.235 286.201 197.389C285.941 197.535 285.744 197.735 285.611 197.989H284.731V193.999H289.191V194.809ZM297.364 199.509H294.264L293.674 201.139H292.694L295.304 194.219H296.334L298.934 201.139H297.954L297.364 199.509ZM297.104 198.799L295.814 195.239L294.524 198.799H297.104ZM302.885 195.579C303.372 195.579 303.805 195.692 304.185 195.919C304.565 196.145 304.862 196.472 305.075 196.899C305.295 197.325 305.405 197.825 305.405 198.399C305.405 198.972 305.295 199.472 305.075 199.899C304.862 200.319 304.565 200.642 304.185 200.869C303.805 201.095 303.372 201.209 302.885 201.209C302.352 201.209 301.898 201.075 301.525 200.809C301.158 200.535 300.905 200.179 300.765 199.739V203.739H299.855V195.649H300.765V197.049C300.905 196.609 301.158 196.255 301.525 195.989C301.898 195.715 302.352 195.579 302.885 195.579ZM302.625 196.389C302.272 196.389 301.952 196.472 301.665 196.639C301.378 196.799 301.155 197.032 300.995 197.339C300.835 197.645 300.755 197.999 300.755 198.399C300.755 198.799 300.835 199.152 300.995 199.459C301.155 199.759 301.378 199.992 301.665 200.159C301.952 200.325 302.272 200.409 302.625 200.409C303.192 200.409 303.642 200.232 303.975 199.879C304.315 199.519 304.485 199.025 304.485 198.399C304.485 197.772 304.315 197.282 303.975 196.929C303.642 196.569 303.192 196.389 302.625 196.389ZM307.503 196.759C307.683 196.379 307.947 196.085 308.293 195.879C308.64 195.665 309.053 195.559 309.533 195.559V196.549H309.253C308.74 196.549 308.32 196.682 307.993 196.949C307.667 197.209 307.503 197.642 307.503 198.249V201.139H306.593V195.649H307.503V196.759ZM310.271 194.039C310.271 193.872 310.328 193.739 310.441 193.639C310.555 193.532 310.705 193.479 310.891 193.479C311.078 193.479 311.228 193.532 311.341 193.639C311.455 193.739 311.511 193.872 311.511 194.039C311.511 194.205 311.455 194.342 311.341 194.449C311.228 194.549 311.078 194.599 310.891 194.599C310.705 194.599 310.555 194.549 310.441 194.449C310.328 194.342 310.271 194.205 310.271 194.039ZM311.341 195.649V201.139H310.431V195.649H311.341ZM313.714 193.739V201.139H312.804V193.739H313.714Z"
                            fill="black" />
                        <path
                            d="M541.99 193.899C542.443 193.899 542.833 193.979 543.16 194.139C543.487 194.299 543.733 194.519 543.9 194.799C544.067 195.079 544.15 195.395 544.15 195.749C544.15 196.189 544.02 196.559 543.76 196.859C543.507 197.159 543.133 197.339 542.64 197.399V197.459C543.153 197.592 543.553 197.799 543.84 198.079C544.133 198.359 544.28 198.745 544.28 199.239C544.28 199.819 544.087 200.292 543.7 200.659C543.313 201.025 542.757 201.209 542.03 201.209C541.303 201.209 540.713 201.022 540.26 200.649C539.813 200.269 539.55 199.715 539.47 198.989H540.37C540.43 199.429 540.597 199.779 540.87 200.039C541.15 200.299 541.527 200.429 542 200.429C542.447 200.429 542.79 200.315 543.03 200.089C543.27 199.855 543.39 199.555 543.39 199.189C543.39 198.749 543.217 198.415 542.87 198.189C542.53 197.955 542.043 197.839 541.41 197.839H541.17V197.079H541.41C542.637 197.079 543.25 196.669 543.25 195.849C543.25 195.489 543.137 195.202 542.91 194.989C542.683 194.775 542.37 194.669 541.97 194.669C541.57 194.669 541.233 194.785 540.96 195.019C540.687 195.245 540.527 195.582 540.48 196.029H539.59C539.637 195.362 539.867 194.842 540.28 194.469C540.7 194.089 541.27 193.899 541.99 193.899ZM546.019 200.219C545.645 199.585 545.459 198.702 545.459 197.569C545.459 196.442 545.645 195.565 546.019 194.939C546.392 194.305 547.039 193.989 547.959 193.989C548.879 193.989 549.525 194.305 549.899 194.939C550.279 195.572 550.469 196.449 550.469 197.569C550.469 198.702 550.279 199.585 549.899 200.219C549.525 200.852 548.879 201.169 547.959 201.169C547.039 201.169 546.392 200.852 546.019 200.219ZM549.439 199.029C549.525 198.635 549.569 198.149 549.569 197.569C549.569 196.995 549.525 196.515 549.439 196.129C549.359 195.742 549.202 195.435 548.969 195.209C548.735 194.975 548.399 194.859 547.959 194.859C547.525 194.859 547.192 194.975 546.959 195.209C546.725 195.435 546.565 195.742 546.479 196.129C546.399 196.515 546.359 196.995 546.359 197.569C546.359 198.149 546.399 198.635 546.479 199.029C546.565 199.415 546.725 199.725 546.959 199.959C547.192 200.192 547.525 200.309 547.959 200.309C548.399 200.309 548.735 200.192 548.969 199.959C549.202 199.725 549.359 199.415 549.439 199.029ZM558.362 199.509H555.262L554.672 201.139H553.692L556.302 194.219H557.332L559.932 201.139H558.952L558.362 199.509ZM558.102 198.799L556.812 195.239L555.522 198.799H558.102ZM563.883 195.579C564.37 195.579 564.803 195.692 565.183 195.919C565.563 196.145 565.86 196.472 566.073 196.899C566.293 197.325 566.403 197.825 566.403 198.399C566.403 198.972 566.293 199.472 566.073 199.899C565.86 200.319 565.563 200.642 565.183 200.869C564.803 201.095 564.37 201.209 563.883 201.209C563.35 201.209 562.896 201.075 562.523 200.809C562.156 200.535 561.903 200.179 561.763 199.739V203.739H560.853V195.649H561.763V197.049C561.903 196.609 562.156 196.255 562.523 195.989C562.896 195.715 563.35 195.579 563.883 195.579ZM563.623 196.389C563.27 196.389 562.95 196.472 562.663 196.639C562.376 196.799 562.153 197.032 561.993 197.339C561.833 197.645 561.753 197.999 561.753 198.399C561.753 198.799 561.833 199.152 561.993 199.459C562.153 199.759 562.376 199.992 562.663 200.159C562.95 200.325 563.27 200.409 563.623 200.409C564.19 200.409 564.64 200.232 564.973 199.879C565.313 199.519 565.483 199.025 565.483 198.399C565.483 197.772 565.313 197.282 564.973 196.929C564.64 196.569 564.19 196.389 563.623 196.389ZM568.501 196.759C568.681 196.379 568.945 196.085 569.291 195.879C569.638 195.665 570.051 195.559 570.531 195.559V196.549H570.251C569.738 196.549 569.318 196.682 568.991 196.949C568.665 197.209 568.501 197.642 568.501 198.249V201.139H567.591V195.649H568.501V196.759ZM571.269 194.039C571.269 193.872 571.326 193.739 571.439 193.639C571.553 193.532 571.703 193.479 571.889 193.479C572.076 193.479 572.226 193.532 572.339 193.639C572.453 193.739 572.509 193.872 572.509 194.039C572.509 194.205 572.453 194.342 572.339 194.449C572.226 194.549 572.076 194.599 571.889 194.599C571.703 194.599 571.553 194.549 571.439 194.449C571.326 194.342 571.269 194.205 571.269 194.039ZM572.339 195.649V201.139H571.429V195.649H572.339ZM574.712 193.739V201.139H573.802V193.739H574.712Z"
                            fill="black" />
                        <path
                            d="M1.58891 167.896C1.14091 167.136 0.91691 166.076 0.91691 164.716C0.91691 163.364 1.14091 162.312 1.58891 161.56C2.03691 160.8 2.81291 160.42 3.91691 160.42C5.02091 160.42 5.79691 160.8 6.24491 161.56C6.70091 162.32 6.92891 163.372 6.92891 164.716C6.92891 166.076 6.70091 167.136 6.24491 167.896C5.79691 168.656 5.02091 169.036 3.91691 169.036C2.81291 169.036 2.03691 168.656 1.58891 167.896ZM5.69291 166.468C5.79691 165.996 5.84891 165.412 5.84891 164.716C5.84891 164.028 5.79691 163.452 5.69291 162.988C5.59691 162.524 5.40891 162.156 5.12891 161.884C4.84891 161.604 4.44491 161.464 3.91691 161.464C3.39691 161.464 2.99691 161.604 2.71691 161.884C2.43691 162.156 2.24491 162.524 2.14091 162.988C2.04491 163.452 1.99691 164.028 1.99691 164.716C1.99691 165.412 2.04491 165.996 2.14091 166.468C2.24491 166.932 2.43691 167.304 2.71691 167.584C2.99691 167.864 3.39691 168.004 3.91691 168.004C4.44491 168.004 4.84891 167.864 5.12891 167.584C5.40891 167.304 5.59691 166.932 5.69291 166.468Z"
                            fill="black" />
                        <path d="M20.5 1V195" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M55 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M89 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M124 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M158 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M193 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M227 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M262 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M296 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M331 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M365 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M400 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M434 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M469 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M503 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M538 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M572 1V176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M587 176L3.00001 176" stroke="#C7C7C7" stroke-width="0.5" stroke-linecap="round" />
                    </svg>

                </div>

                {{-- //table of partners + pagination--}}
                {{-- <div class="mt-10 w-full">
                            <section class="bg-white dark:bg-gray-900 p-3 sm:p-5">
                                <div class="mx-auto  max-w-screen-2xl px-4 lg:px-12">
                                    <!-- Start coding here -->
                                    <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                            <div class="w-full md:w-1/2">
                                                <form class="flex items-center">
                                                    <label for="simple-search" class="sr-only">Search</label>
                                                    <div class="relative w-full">
                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                                            </svg>
                                                        </div>
                                                        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                                <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                    </svg>
                                                    Add product
                                                </button>
                                                <div class="flex items-center space-x-3 w-full md:w-auto">
                                                    <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                        <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                        </svg>
                                                        Actions
                                                    </button>
                                                    <div id="actionsDropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="actionsDropdownButton">
                                                            <li>
                                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass Edit</a>
                                                            </li>
                                                        </ul>
                                                        <div class="py-1">
                                                            <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete all</a>
                                                        </div>
                                                    </div>
                                                    <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown" class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700" type="button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
                                                        </svg>
                                                        Filter
                                                        <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path clip-rule="evenodd" fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                                        </svg>
                                                    </button>
                                                    <div id="filterDropdown" class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                                        <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                                        <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                            <li class="flex items-center">
                                                                <input id="apple" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                <label for="apple" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Apple (56)</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="fitbit" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                <label for="fitbit" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Microsoft (16)</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="razor" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                <label for="razor" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Razor (49)</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="nikon" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                <label for="nikon" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Nikon (12)</label>
                                                            </li>
                                                            <li class="flex items-center">
                                                                <input id="benq" type="checkbox" value="" class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                                <label for="benq" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">BenQ (74)</label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="overflow-x-auto">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                    <tr>
                                                        <th scope="col" class="px-4 py-3">Product name</th>
                                                        <th scope="col" class="px-4 py-3">Category</th>
                                                        <th scope="col" class="px-4 py-3">Brand</th>
                                                        <th scope="col" class="px-4 py-3">Description</th>
                                                        <th scope="col" class="px-4 py-3">Price</th>
                                                        <th scope="col" class="px-4 py-3">
                                                            <span class="sr-only">Actions</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                                                        <td class="px-4 py-3">PC</td>
                                                        <td class="px-4 py-3">Apple</td>
                                                        <td class="px-4 py-3">300</td>
                                                        <td class="px-4 py-3">$2999</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 20&#34;</th>
                                                        <td class="px-4 py-3">PC</td>
                                                        <td class="px-4 py-3">Apple</td>
                                                        <td class="px-4 py-3">200</td>
                                                        <td class="px-4 py-3">$1499</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="apple-imac-20-dropdown-button" data-dropdown-toggle="apple-imac-20-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="apple-imac-20-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-20-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iPhone 14</th>
                                                        <td class="px-4 py-3">Phone</td>
                                                        <td class="px-4 py-3">Apple</td>
                                                        <td class="px-4 py-3">1237</td>
                                                        <td class="px-4 py-3">$999</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="apple-iphone-14-dropdown-button" data-dropdown-toggle="apple-iphone-14-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="apple-iphone-14-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-iphone-14-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iPad Air</th>
                                                        <td class="px-4 py-3">Tablet</td>
                                                        <td class="px-4 py-3">Apple</td>
                                                        <td class="px-4 py-3">4578</td>
                                                        <td class="px-4 py-3">$1199</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="apple-ipad-air-dropdown-button" data-dropdown-toggle="apple-ipad-air-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="apple-ipad-air-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-ipad-air-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Xbox Series S</th>
                                                        <td class="px-4 py-3">Gaming/Console</td>
                                                        <td class="px-4 py-3">Microsoft</td>
                                                        <td class="px-4 py-3">56</td>
                                                        <td class="px-4 py-3">$299</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="xbox-series-s-dropdown-button" data-dropdown-toggle="xbox-series-s-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="xbox-series-s-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="xbox-series-s-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">PlayStation 5</th>
                                                        <td class="px-4 py-3">Gaming/Console</td>
                                                        <td class="px-4 py-3">Sony</td>
                                                        <td class="px-4 py-3">78</td>
                                                        <td class="px-4 py-3">$799</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="playstation-5-dropdown-button" data-dropdown-toggle="playstation-5-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="playstation-5-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="playstation-5-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Xbox Series X</th>
                                                        <td class="px-4 py-3">Gaming/Console</td>
                                                        <td class="px-4 py-3">Microsoft</td>
                                                        <td class="px-4 py-3">200</td>
                                                        <td class="px-4 py-3">$699</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="xbox-series-x-dropdown-button" data-dropdown-toggle="xbox-series-x-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="xbox-series-x-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="xbox-series-x-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple Watch SE</th>
                                                        <td class="px-4 py-3">Watch</td>
                                                        <td class="px-4 py-3">Apple</td>
                                                        <td class="px-4 py-3">657</td>
                                                        <td class="px-4 py-3">$399</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="apple-watch-se-dropdown-button" data-dropdown-toggle="apple-watch-se-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="apple-watch-se-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-watch-se-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">NIKON D850</th>
                                                        <td class="px-4 py-3">Photo</td>
                                                        <td class="px-4 py-3">Nikon</td>
                                                        <td class="px-4 py-3">465</td>
                                                        <td class="px-4 py-3">$599</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="nikon-d850-dropdown-button" data-dropdown-toggle="nikon-d850-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="nikon-d850-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="nikon-d850-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr class="border-b dark:border-gray-700">
                                                        <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Monitor BenQ EX2710Q</th>
                                                        <td class="px-4 py-3">TV/Monitor</td>
                                                        <td class="px-4 py-3">BenQ</td>
                                                        <td class="px-4 py-3">354</td>
                                                        <td class="px-4 py-3">$499</td>
                                                        <td class="px-4 py-3 flex items-center justify-end">
                                                            <button id="benq-ex2710q-dropdown-button" data-dropdown-toggle="benq-ex2710q-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                                </svg>
                                                            </button>
                                                            <div id="benq-ex2710q-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="benq-ex2710q-dropdown-button">
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                                    </li>
                                                                </ul>
                                                                <div class="py-1">
                                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                Showing
                                                <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                                                of
                                                <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                                            </span>
                                            <ul class="inline-flex items-stretch -space-x-px">
                                                <li>
                                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <span class="sr-only">Previous</span>
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                                </li>
                                                <li>
                                                    <a href="#" aria-current="page" class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                                        <span class="sr-only">Next</span>
                                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                </section> 
                           
                        </div> --}}

                <div class=" mt-12 w-full h-full ">
                    <div class="mx-auto  max-w-screen-2xl px-4 lg:px-0">
                        <!-- Start coding here -->
                        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                            <div
                                class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                                <div class="w-full md:w-1/2">
                                    <form class="flex items-center">
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div
                                                class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                                    fill="currentColor" viewbox="0 0 20 20"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <input type="text" id="simple-search"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Search" required="">
                                        </div>
                                    </form>
                                </div>
                                <div
                                    class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                    {{-- <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                                <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                                </svg>
                                                Add product
                                            </button> --}}
                                    <div class="flex items-center space-x-3 w-full md:w-auto">
                                        <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                            class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                            type="button">
                                            <svg class="-ml-1 mr-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                            </svg>
                                            Actions
                                        </button>
                                        <div id="actionsDropdown"
                                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="actionsDropdownButton">
                                                <li>
                                                    <a href="#"
                                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                                                        Edit</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a href="#"
                                                    class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete
                                                    all</a>
                                            </div>
                                        </div>
                                        <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                            class="w-full md:w-auto flex items-center justify-center py-2 px-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                            type="button">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                class="h-4 w-4 mr-2 text-gray-400" viewbox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Filter
                                            <svg class="-mr-1 ml-1.5 w-5 h-5" fill="currentColor" viewbox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                            </svg>
                                        </button>
                                        <div id="filterDropdown"
                                            class="z-10 hidden w-48 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose
                                                brand</h6>
                                            <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                                <li class="flex items-center">
                                                    <input id="apple" type="checkbox" value=""
                                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="apple"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Voi
                                                        Scooter (19)</label>
                                                </li>
                                                <li class="flex items-center">
                                                    <input id="fitbit" type="checkbox" value=""
                                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="fitbit"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Scoot
                                                        (29)</label>
                                                </li>
                                                <li class="flex items-center">
                                                    <input id="razor" type="checkbox" value=""
                                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="razor"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Beam
                                                        (49)</label>
                                                </li>
                                                <li class="flex items-center">
                                                    <input id="nikon" type="checkbox" value=""
                                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="nikon"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Bunny
                                                        (12)</label>
                                                </li>
                                                <li class="flex items-center">
                                                    <input id="benq" type="checkbox" value=""
                                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                                    <label for="benq"
                                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Circ
                                                        (74)</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-4 py-3">Partners <p class=" capitalize">*Click
                                                    Admin you want to see</p>
                                            </th>
                                            <th scope="col" class="px-4 py-3">Countries</th>
                                            <th scope="col" class="px-4 py-3">Rider/Users</th>
                                            <th scope="col" class="px-4 py-3">Fleets</th>
                                            <th scope="col" class="px-4 py-3">Vehicles</th>
                                            <th scope="col" class="px-4 py-3">
                                                <span class="sr-only">Actions</span>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="border-b dark:border-gray-700">
                                            <th scope="row"
                                                class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                <div class=" p-0 m-0 flex items-center justify-start gap-2">
                                                    <img src="images/partners/partnerImage1.png" class=" h-5 w-5"
                                                        alt="">
                                                    <p class="text-xs">VOI scooter</p>
                                                </div>
                                            </th>
                                            <td class="px-4 py-3">Nigeria</td>
                                            <td class="px-4 py-3">1,589,900</td>
                                            <td class="px-4 py-3">200</td>
                                            <td class="px-4 py-3">2,000,000</td>
                                            <td class="px-4 py-3 flex items-center justify-end">
                                                <button id="apple-imac-27-dropdown-button"
                                                    data-dropdown-toggle="apple-imac-27-dropdown"
                                                    class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                                    type="button">
                                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                        viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                    </svg>
                                                </button>
                                                <div id="apple-imac-27-dropdown"
                                                    class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                        aria-labelledby="apple-imac-27-dropdown-button">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                        </li>
                                                    </ul>
                                                    <div class="py-1">
                                                        <a href="#"
                                                            class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4"
                                aria-label="Table navigation">
                                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                    Showing
                                    <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                                    of
                                    <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                                </span>
                                <ul class="inline-flex items-stretch -space-x-px">
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-current="page"
                                            class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                {{-- table of reviews --}}
                <div>

                </div>

                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>

            {{-- right i--}}
            <div class=" bg-white  w-[24rem]">


            </div>

        </div>
        </div>
    </body>

</html>