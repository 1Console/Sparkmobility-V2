{{--
    <form class="flex items-center">
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd"
    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
    clip-rule="evenodd" />
    </svg>
    </div>
    <input type="text" id="simple-search"
    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
    placeholder="Search" required="">
    </div>
    </form>
--}}

<form action="#" method="GET" class="hidden lg:block lg:pl-2">
	<label for="topbar-search" class="sr-only">Search</label>
	<div class="relative mt-1 lg:w-96">
		<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
			<svg
				class="h-4 w-4 text-gray-500"
				aria-hidden="true"
				xmlns="http://www.w3.org/2000/svg"
				fill="none"
				viewBox="0 0 20 20"
			>
				<path
					stroke="currentColor"
					stroke-linecap="round"
					stroke-linejoin="round"
					stroke-width="2"
					d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
				/>
			</svg>
		</div>
		<input
			type="text"
			name="email"
			id="topbar-search"
			class="block w-full rounded-full border border-gray-200 bg-gray-50 p-2 pl-9 text-gray-900 focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
			placeholder="Search"
		/>
	</div>
</form>
