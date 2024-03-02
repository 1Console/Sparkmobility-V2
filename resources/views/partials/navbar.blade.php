{{-- <header class="sticky left-0 top-0 z-30 w-full antialiased"> --}}
<header class="fixed z-30 w-full antialiased">
	<nav class="border-b border-gray-200 bg-white px-4 py-2.5 shadow lg:px-6">
		<div class="flex flex-col md:flex-row md:items-center md:justify-between">
			<div class="flex items-center justify-start">
				{{-- toggle sidebar start --}}
				<button
					id="toggleSidebar"
					aria-expanded="true"
					aria-controls="sidebar"
					class="mr-2 hidden cursor-pointer rounded p-2 text-gray-600 hover:bg-brand-100 hover:text-gray-900 lg:inline"
				>
					<svg
						class="size-5"
						aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 16 12"
					>
						<path
							stroke="currentColor"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M1 1h14M1 6h14M1 11h7"
						/>
					</svg>
				</button>
				<button
					aria-expanded="true"
					aria-controls="sidebar"
					class="mr-2 cursor-pointer rounded-lg p-2 text-gray-600 hover:bg-brand-100 hover:text-gray-900 focus:bg-gray-100 focus:ring-2 focus:ring-gray-100 lg:hidden"
				>
					<svg
						class="size-5"
						aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 17 14"
					>
						<path
							stroke="currentColor"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M1 1h15M1 7h15M1 13h15"
						/>
					</svg>
					<span class="sr-only">Toggle sidebar</span>
				</button>
				{{-- toggle sidebar start end --}}

				<a href="/" class="mr-6 flex">
					{{-- <span class="self-center text-2xl font-semibold whitespace-nowrap">Spark Mobility</span> --}}
					<img
						class="ms-3 w-20"
						src="{{ url("images/TrekkLogo.png") }}"
						alt="Trekk Logo"
					/>
				</a>

				@include("partials.top_search_section")
			</div>

			<div class="flex items-center justify-between space-x-2 md:justify-end lg:order-2">
				{{-- Date --}}
				<span class="hidden shrink-0 items-center text-sm sm:inline-flex">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="me-1.5 size-4 text-slate-500"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z"
						/>
					</svg>
					<span id="todaysDate"></span>
				</span>

				<!-- Mobile search toggler -->
				<button
					id="toggleSidebarMobileSearch"
					type="button"
					class="rounded-lg p-2 text-gray-500 hover:bg-brand-100 hover:text-gray-900 lg:hidden"
				>
					<span class="sr-only">Search</span>
					<!-- Search icon -->
					<svg
						class="size-4"
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
				</button>

				<!-- Notifications -->
				<button
					type="button"
					data-dropdown-toggle="notification-dropdown"
					class="mr-1 rounded-lg p-2 text-gray-500 hover:bg-brand-100 hover:text-gray-900"
				>
					<span class="sr-only">View notifications</span>
					<!-- Bell icon -->
					<div class="relative">
						<svg
							class="size-5 text-gray-800"
							aria-hidden="true"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
						>
							<path
								stroke="currentColor"
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="1.5"
								d="M12 5.4V3m0 2.4a5.3 5.3 0 0 1 5.1 5.3v1.8c0 2.4 1.9 3 1.9 4.2 0 .6 0 1.3-.5 1.3h-13c-.5 0-.5-.7-.5-1.3 0-1.2 1.9-1.8 1.9-4.2v-1.8A5.3 5.3 0 0 1 12 5.4ZM8.7 18c.1.9.3 1.5 1 2.1a3.5 3.5 0 0 0 4.6 0c.7-.6 1.3-1.2 1.4-2.1h-7Z"
							/>
						</svg>
						<div
							class="absolute -right-2.5 top-0.5 me-2 size-1 rounded-full bg-green-500"
						></div>
					</div>
				</button>
				<!-- Dropdown menu grid -->
				<div
					class="z-50 my-4 hidden max-w-sm list-none divide-y divide-gray-100 overflow-hidden rounded bg-white text-base shadow-lg"
					id="notification-dropdown"
				>
					<div
						class="block bg-gray-50 px-4 py-2 text-center text-base font-medium text-gray-700"
					>
						Notifications
					</div>
					<div>
						<a href="#" class="flex border-b px-4 py-3 hover:bg-brand-100">
							<div class="shrink-0">
								<img
									class="size-11 rounded-full border-2 border-white"
									src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
									alt="Bonnie Green avatar"
								/>
								<div
									class="absolute -mt-5 ml-6 flex size-5 items-center justify-center rounded-full border border-white bg-primary-700"
								>
									<svg
										class="size-2 text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 18 18"
									>
										<path
											d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"
										/>
										<path
											d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"
										/>
									</svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="mb-1.5 text-sm font-normal text-gray-500">
									New message from
									<span class="font-semibold text-gray-900">Bonnie Green</span>
									: "Hey, what's up? All set for the presentation?"
								</div>
								<div class="text-xs font-medium text-primary-700">
									a few moments ago
								</div>
							</div>
						</a>
						<a href="#" class="flex border-b px-4 py-3 hover:bg-brand-100">
							<div class="shrink-0">
								<img
									class="size-11 rounded-full border-2 border-white"
									src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
									alt="Jese Leos avatar"
								/>
								<div
									class="absolute -mt-5 ml-6 flex size-5 items-center justify-center rounded-full border border-white bg-gray-900"
								>
									<svg
										class="size-2 text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 18"
									>
										<path
											d="M6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Zm11-3h-2V5a1 1 0 0 0-2 0v2h-2a1 1 0 1 0 0 2h2v2a1 1 0 0 0 2 0V9h2a1 1 0 1 0 0-2Z"
										/>
									</svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="mb-1.5 text-sm font-normal text-gray-500">
									<span class="font-semibold text-gray-900">Jese leos</span>
									and
									<span class="font-medium text-gray-900">5 others</span>
									started following you.
								</div>
								<div class="text-xs font-medium text-primary-700">
									10 minutes ago
								</div>
							</div>
						</a>
						<a href="#" class="flex border-b px-4 py-3 hover:bg-brand-100">
							<div class="shrink-0">
								<img
									class="size-11 rounded-full border-2 border-white"
									src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
									alt="Joseph McFall avatar"
								/>
								<div
									class="absolute -mt-5 ml-6 flex size-5 items-center justify-center rounded-full border border-white bg-red-600"
								>
									<svg
										class="size-2 text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 18"
									>
										<path
											d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"
										/>
									</svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="mb-1.5 text-sm font-normal text-gray-500">
									<span class="font-semibold text-gray-900">Joseph Mcfall</span>
									and
									<span class="font-medium text-gray-900">141 others</span>
									love your story. See it and view more stories.
								</div>
								<div class="text-xs font-medium text-primary-700">
									44 minutes ago
								</div>
							</div>
						</a>
						<a href="#" class="flex border-b px-4 py-3 hover:bg-brand-100">
							<div class="shrink-0">
								<img
									class="size-11 rounded-full border-2 border-white"
									src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
									alt="Roberta Casas image"
								/>
								<div
									class="absolute -mt-5 ml-6 flex size-5 items-center justify-center rounded-full border border-white bg-green-400"
								>
									<svg
										class="size-2 text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 18"
									>
										<path
											d="M18 0H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h2v4a1 1 0 0 0 1.707.707L10.414 13H18a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5 4h2a1 1 0 1 1 0 2h-2a1 1 0 1 1 0-2ZM5 4h5a1 1 0 1 1 0 2H5a1 1 0 0 1 0-2Zm2 5H5a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Zm9 0h-6a1 1 0 0 1 0-2h6a1 1 0 1 1 0 2Z"
										/>
									</svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="mb-1.5 text-sm font-normal text-gray-500">
									<span class="font-semibold text-gray-900">
										Leslie Livingston
									</span>
									mentioned you in a comment:
									<span class="font-medium text-primary-700">@bonnie.green</span>
									what do you say?
								</div>
								<div class="text-xs font-medium text-primary-700">1 hour ago</div>
							</div>
						</a>
						<a href="#" class="flex px-4 py-3 hover:bg-brand-100">
							<div class="shrink-0">
								<img
									class="size-11 rounded-full border-2 border-white"
									src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
									alt="Robert image"
								/>
								<div
									class="absolute -mt-5 ml-6 flex size-5 items-center justify-center rounded-full border border-white bg-purple-500"
								>
									<svg
										class="size-2 text-white"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 14"
									>
										<path
											d="M11 0H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm8.585 1.189a.994.994 0 0 0-.9-.138l-2.965.983a1 1 0 0 0-.685.949v8a1 1 0 0 0 .675.946l2.965 1.02a1.013 1.013 0 0 0 1.032-.242A1 1 0 0 0 20 12V2a1 1 0 0 0-.415-.811Z"
										/>
									</svg>
								</div>
							</div>
							<div class="w-full pl-3">
								<div class="mb-1.5 text-sm font-normal text-gray-500">
									<span class="font-semibold text-gray-900">Robert Brown</span>
									posted a new video: Glassmorphism - learn how to implement the
									new design trend.
								</div>
								<div class="text-xs font-medium text-primary-700">3 hours ago</div>
							</div>
						</a>
					</div>
					<a
						href="#"
						class="block bg-gray-50 py-2 text-center text-base font-medium text-gray-900 hover:bg-brand-100"
					>
						<div class="inline-flex items-center">
							<svg
								aria-hidden="true"
								class="mr-2 size-5"
								fill="currentColor"
								viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg"
							>
								<path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
								<path
									fill-rule="evenodd"
									d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
									clip-rule="evenodd"
								></path>
							</svg>
							View all
						</div>
					</a>
				</div>
				<!-- Apps -->
				<button
					type="button"
					data-dropdown-toggle="apps-dropdown"
					class="rounded-lg p-2 text-gray-500 hover:bg-brand-100 hover:text-gray-800"
				>
					<span class="sr-only">View notifications</span>
					<!-- Icon -->
					<svg
						class="size-4"
						aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg"
						fill="currentColor"
						viewBox="0 0 18 18"
					>
						<path
							d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"
						/>
					</svg>
				</button>
				<!-- Dropdown menu -->
				<div
					class="z-50 my-4 hidden max-w-sm list-none divide-y divide-gray-100 overflow-hidden rounded bg-white text-base shadow-lg"
					id="apps-dropdown"
				>
					<div
						class="block bg-gray-50 px-4 py-2 text-center text-base font-medium text-gray-700"
					>
						Apps
					</div>
					<div class="grid grid-cols-3 gap-4 p-4">
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 18 20"
							>
								<path
									d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Sales</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 19"
							>
								<path
									d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"
								/>
								<path
									d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Users</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 18 18"
							>
								<path
									d="M15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783ZM6 2h6a1 1 0 1 1 0 2H6a1 1 0 0 1 0-2Zm7 5H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Z"
								/>
								<path
									d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Inbox</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 20"
							>
								<path
									d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Profile</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 20"
							>
								<path
									d="M18 7.5h-.423l-.452-1.09.3-.3a1.5 1.5 0 0 0 0-2.121L16.01 2.575a1.5 1.5 0 0 0-2.121 0l-.3.3-1.089-.452V2A1.5 1.5 0 0 0 11 .5H9A1.5 1.5 0 0 0 7.5 2v.423l-1.09.452-.3-.3a1.5 1.5 0 0 0-2.121 0L2.576 3.99a1.5 1.5 0 0 0 0 2.121l.3.3L2.423 7.5H2A1.5 1.5 0 0 0 .5 9v2A1.5 1.5 0 0 0 2 12.5h.423l.452 1.09-.3.3a1.5 1.5 0 0 0 0 2.121l1.415 1.413a1.5 1.5 0 0 0 2.121 0l.3-.3 1.09.452V18A1.5 1.5 0 0 0 9 19.5h2a1.5 1.5 0 0 0 1.5-1.5v-.423l1.09-.452.3.3a1.5 1.5 0 0 0 2.121 0l1.415-1.414a1.5 1.5 0 0 0 0-2.121l-.3-.3.452-1.09H18a1.5 1.5 0 0 0 1.5-1.5V9A1.5 1.5 0 0 0 18 7.5Zm-8 6a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Settings</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 16"
							>
								<path
									d="M19 0H1a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1ZM2 6v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H2Zm11 3a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8a1 1 0 0 1 2 0h2a1 1 0 0 1 2 0v1Z"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Products</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 11 20"
							>
								<path
									stroke="currentColor"
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M1.75 15.363a4.954 4.954 0 0 0 2.638 1.574c2.345.572 4.653-.434 5.155-2.247.502-1.813-1.313-3.79-3.657-4.364-2.344-.574-4.16-2.551-3.658-4.364.502-1.813 2.81-2.818 5.155-2.246A4.97 4.97 0 0 1 10 5.264M6 17.097v1.82m0-17.5v2.138"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Pricing</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 16 20"
							>
								<path
									d="M7 11H5v1h2v-1Zm4 3H9v1h2v-1Zm-4 0H5v1h2v-1ZM5 5V.13a2.98 2.98 0 0 0-1.293.749L.88 3.707A2.98 2.98 0 0 0 .13 5H5Z"
								/>
								<path
									d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM13 16a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v6Zm-1-8H9a1 1 0 0 1 0-2h3a1 1 0 1 1 0 2Zm0-3H9a1 1 0 0 1 0-2h3a1 1 0 1 1 0 2Z"
								/>
								<path d="M11 11H9v1h2v-1Z" />
							</svg>
							<div class="text-sm font-medium text-gray-900">Billing</div>
						</a>
						<a
							href="#"
							class="group block rounded-lg p-4 text-center hover:bg-brand-100"
						>
							<svg
								class="mx-auto mb-2 size-5 text-gray-400 group-hover:text-gray-500"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 16 16"
							>
								<path
									stroke="currentColor"
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="M4 8h11m0 0-4-4m4 4-4 4m-5 3H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h3"
								/>
							</svg>
							<div class="text-sm font-medium text-gray-900">Logout</div>
						</a>
					</div>
				</div>

				<!-- Profile menu -->
				<div class="flex shrink-0 items-center justify-center">
					<button
						type="button"
						class="flex items-center space-x-0.5 rounded-md px-3 py-1.5 hover:bg-brand-100 focus:outline-none focus:ring-4 focus:ring-gray-100"
						id="user-menu-button"
						data-dropdown-toggle="user-menu-dropdown"
						data-dropdown-placement="bottom"
					>
						<span class="sr-only">Open user menu</span>

						<img
							class="size-8 rounded-full md:size-6"
							src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
							alt="user photo"
						/>

						<hr class="hidden w-5 rotate-90 text-gray-400 md:block" />

						<span class="hidden flex-col items-start -space-y-1 md:flex">
							<span class="text-xs">Trekkscooters</span>
							<span class="text-xxs text-brand-400">Super Admin</span>
						</span>
					</button>

					<!-- User dropdown menu -->
					<div
						class="z-50 my-4 hidden w-56 list-none divide-y divide-gray-100 rounded bg-white text-base shadow"
						id="user-menu-dropdown"
					>
						<div class="px-4 py-3">
							<span class="block text-sm font-semibold text-gray-900">Admin Pro</span>
							<span class="block truncate text-sm text-gray-500">
								name.pro@trekkscooters.com
							</span>
						</div>
						<ul class="py-1 text-gray-500" aria-labelledby="user-menu-button">
							<li>
								<a href="#" class="block px-4 py-2 text-sm hover:bg-brand-100">
									My profile
								</a>
							</li>
							<li>
								<a href="#" class="block px-4 py-2 text-sm hover:bg-brand-100">
									Account settings
								</a>
							</li>
						</ul>
						<ul class="py-1 text-gray-500" aria-labelledby="dropdown">
							<li>
								<a
									href="#"
									class="flex items-center px-4 py-2 text-sm hover:bg-brand-100"
								>
									<svg
										class="mr-2 size-4 text-gray-400"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 18"
									>
										<path
											d="M17.947 2.053a5.209 5.209 0 0 0-3.793-1.53A6.414 6.414 0 0 0 10 2.311 6.482 6.482 0 0 0 5.824.5a5.2 5.2 0 0 0-3.8 1.521c-1.915 1.916-2.315 5.392.625 8.333l7 7a.5.5 0 0 0 .708 0l7-7a6.6 6.6 0 0 0 2.123-4.508 5.179 5.179 0 0 0-1.533-3.793Z"
										/>
									</svg>
									My likes
								</a>
							</li>
							<li>
								<a
									href="#"
									class="flex items-center px-4 py-2 text-sm hover:bg-brand-100"
								>
									<svg
										class="mr-2 size-4 text-gray-400"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="currentColor"
										viewBox="0 0 20 20"
									>
										<path
											d="m1.56 6.245 8 3.924a1 1 0 0 0 .88 0l8-3.924a1 1 0 0 0 0-1.8l-8-3.925a1 1 0 0 0-.88 0l-8 3.925a1 1 0 0 0 0 1.8Z"
										/>
										<path
											d="M18 8.376a1 1 0 0 0-1 1v.163l-7 3.434-7-3.434v-.163a1 1 0 0 0-2 0v.786a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.786a1 1 0 0 0-1-1Z"
										/>
										<path
											d="M17.993 13.191a1 1 0 0 0-1 1v.163l-7 3.435-7-3.435v-.163a1 1 0 1 0-2 0v.787a1 1 0 0 0 .56.9l8 3.925a1 1 0 0 0 .88 0l8-3.925a1 1 0 0 0 .56-.9v-.787a1 1 0 0 0-1-1Z"
										/>
									</svg>
									Collections
								</a>
							</li>
							<li>
								<a
									href="#"
									class="flex items-center justify-between px-4 py-2 text-sm hover:bg-brand-100"
								>
									<span class="flex items-center">
										<svg
											class="mr-2 size-4 text-brand-400"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 20 20"
										>
											<path
												d="m7.164 3.805-4.475.38L.327 6.546a1.114 1.114 0 0 0 .63 1.89l3.2.375 3.007-5.006ZM11.092 15.9l.472 3.14a1.114 1.114 0 0 0 1.89.63l2.36-2.362.38-4.475-5.102 3.067Zm8.617-14.283A1.613 1.613 0 0 0 18.383.291c-1.913-.33-5.811-.736-7.556 1.01-1.98 1.98-6.172 9.491-7.477 11.869a1.1 1.1 0 0 0 .193 1.316l.986.985.985.986a1.1 1.1 0 0 0 1.316.193c2.378-1.3 9.889-5.5 11.869-7.477 1.746-1.745 1.34-5.643 1.01-7.556Zm-3.873 6.268a2.63 2.63 0 1 1-3.72-3.72 2.63 2.63 0 0 1 3.72 3.72Z"
											/>
										</svg>
										Pro version
									</span>
									<svg
										class="size-2.5 text-gray-400"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 6 10"
									>
										<path
											stroke="currentColor"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="m1 9 4-4-4-4"
										/>
									</svg>
								</a>
							</li>
						</ul>
						<ul class="py-1 text-gray-500" aria-labelledby="dropdown">
							<li>
								<a href="#" class="block px-4 py-2 text-sm hover:bg-brand-100">
									Sign out
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
