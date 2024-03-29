<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}" />

		<title>Trekk Admin Dashboard</title>

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net" />
		<link
			href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap"
			rel="stylesheet"
		/>

		<!-- Scripts -->
		@vite(["resources/css/app.css", "resources/js/app.js"])
	</head>

	<body class="antialiased">
		@include("partials.navbar")

		<div class="relative flex md:h-screen" id="main-container">
			@include("partials.sidebar")

			<main class="mx-auto mt-20 w-full overflow-y-auto bg-neutral-100 md:mt-16 md:flex-1">
				@yield("content")
			</main>
		</div>

		<div class="flex grow justify-center bg-white p-6 md:hidden">
			<span class="mt-auto text-xs font-thin text-gray-500">Powered by Trekk</span>
		</div>
	</body>
</html>
