@extends("layouts.authenticated_layout")

@section("content")
	<div class="mx-auto flex h-auto w-full max-w-7xl flex-col bg-white px-4 py-8 md:px-8">
		<!-- Breadcrumb -->
		<div class="mb-5 flex w-auto">
			<nav
				class="flex rounded-lg border border-gray-200 bg-gray-50 px-5 py-3 text-gray-700"
				aria-label="Breadcrumb"
			>
				<ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
					<li class="inline-flex items-center">
						<a
							href="#"
							class="inline-flex items-center text-sm font-normal text-gray-400 hover:text-brand-400"
						>
							<svg
								class="me-2.5 size-2.5"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 20"
							>
								<path
									d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"
								/>
							</svg>
							<span class="text-xs font-normal text-gray-400 hover:text-brand-400">
								Riders Management
							</span>
						</a>
					</li>
					<li aria-current="page">
						<div class="flex items-center">
							<svg
								class="mx-1 size-6 text-gray-400"
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
									d="m10 16 4-4-4-4"
								/>
							</svg>
							<span class="text-xs font-normal text-gray-500">Rides Management</span>
						</div>
					</li>
				</ol>
			</nav>
		</div>

		<div>
			<div class="relative flex w-auto items-center space-y-0.5 p-2">
				<span
					class="absolute left-36 top-3 rounded-full bg-brand-100 px-2 py-0.5 text-xxs font-medium tracking-wide text-brand-400"
				>
					505 Active
				</span>
				<div class="mr-5 shrink-0">
					<svg
						class="size-9"
						viewBox="0 0 40 40"
						fill="none"
						xmlns="http://www.w3.org/2000/svg"
					>
						<path
							d="M25.8333 9.16667C27.6667 9.16667 29.1667 7.66667 29.1667 5.83333C29.1667 4 27.6667 2.5 25.8333 2.5C24 2.5 22.5 4 22.5 5.83333C22.5 7.66667 24 9.16667 25.8333 9.16667ZM8.33333 20C3.66667 20 0 23.6667 0 28.3333C0 33 3.66667 36.6667 8.33333 36.6667C13 36.6667 16.6667 33 16.6667 28.3333C16.6667 23.6667 13 20 8.33333 20ZM8.33333 34.1667C5.16667 34.1667 2.5 31.5 2.5 28.3333C2.5 25.1667 5.16667 22.5 8.33333 22.5C11.5 22.5 14.1667 25.1667 14.1667 28.3333C14.1667 31.5 11.5 34.1667 8.33333 34.1667ZM18 17.5L22 13.5L23.3333 14.8333C25.1 16.6 27.3 17.8 29.9333 18.2C30.9333 18.35 31.8333 17.55 31.8333 16.5333C31.8333 15.7167 31.2167 15.0167 30.4167 14.8833C28.5667 14.5833 27.05 13.7 25.8333 12.5L22.6667 9.33333C21.8333 8.66667 21 8.33333 20 8.33333C19 8.33333 18.1667 8.66667 17.6667 9.33333L13 14C12.3333 14.6667 12 15.5 12 16.3333C12 17.3333 12.3333 18.1667 13 18.6667L18.3333 23.3333V30C18.3333 30.9167 19.0833 31.6667 20 31.6667C20.9167 31.6667 21.6667 30.9167 21.6667 30V22.6667C21.6667 21.8 21.3333 20.9833 20.75 20.3667L18 17.5ZM31.6667 20C27 20 23.3333 23.6667 23.3333 28.3333C23.3333 33 27 36.6667 31.6667 36.6667C36.3333 36.6667 40 33 40 28.3333C40 23.6667 36.3333 20 31.6667 20ZM31.6667 34.1667C28.5 34.1667 25.8333 31.5 25.8333 28.3333C25.8333 25.1667 28.5 22.5 31.6667 22.5C34.8333 22.5 37.5 25.1667 37.5 28.3333C37.5 31.5 34.8333 34.1667 31.6667 34.1667Z"
							fill="#4ea685"
						/>
					</svg>
				</div>
				<div>
					<div class="text-xl font-medium text-gray-600">Riders</div>
					<p class="text-sm text-zinc-500">Monitor all user’s account here</p>
				</div>
			</div>

			<div class="mt-4">
				Section: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad harum dolor
				amet laudantium? Doloremque consequuntur quaerat minus facilis minima cum officiis,
				unde recusandae perferendis velit iure harum nihil ipsum voluptatibus?
			</div>

			<hr class="my-8" />

			{{-- Table --}}

			<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
				<div
					class="flex-column flex flex-wrap items-center justify-between space-y-4 bg-white py-4 dark:bg-gray-900 md:flex-row md:space-y-0"
				>
					<div>
						<button
							id="dropdownActionButton"
							data-dropdown-toggle="dropdownAction"
							class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-1.5 text-sm font-medium text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700"
							type="button"
						>
							<span class="sr-only">Action button</span>
							Action
							<svg
								class="ms-2.5 size-2.5"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 10 6"
							>
								<path
									stroke="currentColor"
									stroke-linecap="round"
									stroke-linejoin="round"
									stroke-width="2"
									d="m1 1 4 4 4-4"
								/>
							</svg>
						</button>
						<!-- Dropdown menu -->
						<div
							id="dropdownAction"
							class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow"
						>
							<ul
								class="py-1 text-sm text-gray-700 dark:text-gray-200"
								aria-labelledby="dropdownActionButton"
							>
								<li>
									<a
										href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white"
									>
										Reward
									</a>
								</li>
								<li>
									<a
										href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white"
									>
										Promote
									</a>
								</li>
								<li>
									<a
										href="#"
										class="block px-4 py-2 hover:bg-gray-100 dark:hover:text-white"
									>
										Activate account
									</a>
								</li>
							</ul>
							<div class="py-1">
								<a
									href="#"
									class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:text-white"
								>
									Delete User
								</a>
							</div>
						</div>
					</div>
					<label for="table-search" class="sr-only">Search</label>
					<div class="relative">
						<div
							class="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3"
						>
							<svg
								class="size-4 text-gray-500"
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
							id="table-search-users"
							class="block w-80 rounded-lg border border-gray-300 bg-gray-50 ps-10 pt-2 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
							placeholder="Search for users"
						/>
					</div>
				</div>
				<table
					id="riders-list"
					class="w-full text-left text-sm text-gray-500 rtl:text-right"
				>
					<thead class="bg-gray-50 text-xs uppercase text-gray-700">
						<tr>
							<th scope="col" class="p-4">
								<div class="flex items-center">
									<input
										id="checkbox-all-search"
										type="checkbox"
										class="size-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
									/>
									<label for="checkbox-all-search" class="sr-only">
										checkbox
									</label>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Name</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Name</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Phone</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Gender</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Fleet</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Can ride?</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Wallet</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									Fines
									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Status</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									<span class="shrink-0">Created</span>

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
							<th scope="col" class="px-4 py-3">
								<div class="flex items-center">
									Action

									<a href="#">
										<svg
											class="ms-1.5 h-3 w-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="currentColor"
											viewBox="0 0 24 24"
										>
											<path
												d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
											/>
										</svg>
									</a>
								</div>
							</th>
						</tr>
					</thead>
					<tbody>
						<tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700">
							<td class="w-4 p-4">
								<div class="flex items-center">
									<input
										id="checkbox-table-search-1"
										type="checkbox"
										class="size-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
									/>
									<label for="checkbox-table-search-1" class="sr-only">
										checkbox
									</label>
								</div>
							</td>
							<th
								scope="row"
								class="flex items-center whitespace-nowrap px-6 py-4 text-gray-900"
							>
								<img
									class="size-10 rounded-full"
									src="api.multiavatar.com/stefan.svg"
									alt="Jese image"
								/>
								<div class="ps-3">
									<div class="text-base font-semibold">Neil Sims</div>
									<div class="font-normal text-gray-500">
										neil.sims@flowbite.com
									</div>
								</div>
							</th>
							<td class="px-6 py-4">React Developer</td>
							<td class="px-6 py-4">
								<div class="flex items-center">
									<div class="me-2 size-2.5 rounded-full bg-green-500"></div>
									Online
								</div>
							</td>
							<td class="px-6 py-4">
								<!-- Modal toggle -->
								<a
									href="#"
									type="button"
									data-modal-target="editUserModal"
									data-modal-show="editUserModal"
									class="font-medium text-blue-600 hover:underline"
								>
									Edit user
								</a>
							</td>
						</tr>
						<tr class="bg-white hover:bg-gray-50">
							<td class="w-4 p-4">
								<div class="flex items-center">
									<input
										id="checkbox-table-search-3"
										type="checkbox"
										class="size-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800"
									/>
									<label for="checkbox-table-search-3" class="sr-only">
										checkbox
									</label>
								</div>
							</td>
							<th
								scope="row"
								class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900"
							>
								<img
									class="size-10 rounded-full"
									src="/docs/images/people/profile-picture-4.jpg"
									alt="Jese image"
								/>
								<div class="ps-3">
									<div class="text-base font-semibold">Leslie Livingston</div>
									<div class="font-normal text-gray-500">leslie@flowbite.com</div>
								</div>
							</th>
							<td class="px-6 py-4">SEO Specialist</td>
							<td class="px-6 py-4">
								<div class="flex items-center">
									<div class="me-2 size-2.5 rounded-full bg-red-500"></div>
									Offline
								</div>
							</td>
							<td class="px-6 py-4">
								<!-- Modal toggle -->
								<a
									href="#"
									type="button"
									data-modal-show="editUserModal"
									class="font-medium text-blue-600 hover:underline"
								>
									Edit user
								</a>
							</td>
						</tr>
					</tbody>
				</table>

				<!-- Edit user modal -->
				<div
					id="editUserModal"
					tabindex="-1"
					aria-hidden="true"
					class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
				>
					<div class="relative max-h-full w-full max-w-2xl">
						<!-- Modal content -->
						<form class="relative rounded-lg bg-white shadow">
							<!-- Modal header -->
							<div
								class="flex items-start justify-between rounded-t border-b p-4 dark:border-gray-600"
							>
								<h3 class="text-xl font-semibold text-gray-900">Edit user</h3>
								<button
									type="button"
									class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:text-white"
									data-modal-hide="editUserModal"
								>
									<svg
										class="h-3 w-3"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 14 14"
									>
										<path
											stroke="currentColor"
											stroke-linecap="round"
											stroke-linejoin="round"
											stroke-width="2"
											d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
										/>
									</svg>
									<span class="sr-only">Close modal</span>
								</button>
							</div>
							<!-- Modal body -->
							<div class="space-y-6 p-6">
								<div class="grid grid-cols-6 gap-6">
									<div class="col-span-6 sm:col-span-3">
										<label
											for="first-name"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											First Name
										</label>
										<input
											type="text"
											name="first-name"
											id="first-name"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="Bonnie"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="last-name"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Last Name
										</label>
										<input
											type="text"
											name="last-name"
											id="last-name"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="Green"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="email"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Email
										</label>
										<input
											type="email"
											name="email"
											id="email"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="example@company.com"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="phone-number"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Phone Number
										</label>
										<input
											type="number"
											name="phone-number"
											id="phone-number"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="e.g. +(12)3456 789"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="fleet"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Fleet
										</label>
										<input
											type="text"
											name="fleet"
											id="fleet"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="Development"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="company"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Company
										</label>
										<input
											type="number"
											name="company"
											id="company"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="123456"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="current-password"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Current Password
										</label>
										<input
											type="password"
											name="current-password"
											id="current-password"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="••••••••"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="new-password"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											New Password
										</label>
										<input
											type="password"
											name="new-password"
											id="new-password"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-blue-600 focus:ring-blue-600 dark:border-gray-500 dark:bg-gray-600 dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
											placeholder="••••••••"
											required=""
										/>
									</div>
								</div>
							</div>
							<!-- Modal footer -->
							<div
								class="flex items-center space-x-3 rounded-b border-t border-gray-200 p-6 dark:border-gray-600 rtl:space-x-reverse"
							>
								<button
									type="submit"
									class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
								>
									Save all
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
