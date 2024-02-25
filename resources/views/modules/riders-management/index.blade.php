@extends("layouts.authenticated_layout")

@section("content")
	<div class="mx-auto h-auto w-full py-8 md:px-4 lg:max-w-7xl">
		<!-- Breadcrumb -->
		<div class="mb-5 flex md:w-auto">
			<nav
				class="flex w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-gray-700 md:w-auto"
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
								class="me-1 size-6 text-gray-400"
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

		<div class="rounded-lg border border-gray-200 bg-white p-4">
			<div class="relative mt-4 flex w-auto items-center space-y-0.5 px-4 py-5">
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

			<div class="mt-4 px-4">
				Section: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad harum dolor
				amet laudantium? Doloremque consequuntur quaerat minus facilis minima cum officiis,
				unde recusandae perferendis velit iure harum nihil ipsum voluptatibus?
			</div>

			<hr class="my-8" />

			{{-- Table --}}

			<div class="flex flex-col rounded bg-white px-2">
				<div
					class="flex-column flex flex-wrap items-center justify-between py-4 md:flex-row"
				>
					<div
						class="flex-column flex flex-wrap items-center justify-between gap-4 py-4 md:flex-row"
					>
						<div>
							<button
								id="dropdownActionButton"
								data-dropdown-toggle="dropdownAction"
								class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 focus:outline-none focus:ring-4 focus:ring-gray-100 md:text-sm"
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
								class="z-10 hidden w-48 divide-y divide-gray-100 rounded-lg bg-white shadow"
							>
								<ul
									class="py-1 text-sm text-gray-700"
									aria-labelledby="dropdownActionButton"
								>
									<li>
										<a href="#" class="block px-4 py-2 hover:bg-brand-100">
											Reward
										</a>
									</li>
									<li>
										<a href="#" class="block px-4 py-2 hover:bg-brand-100">
											Can lock scooter
										</a>
									</li>
									<li>
										<a href="#" class="block px-4 py-2 hover:bg-brand-100">
											Activate account
										</a>
									</li>
									<li>
										<a href="#" class="block px-4 py-2 hover:bg-brand-100">
											Deactivate account
										</a>
									</li>
								</ul>
								<div class="py-1">
									<a
										href="#"
										class="block px-4 py-2 text-sm text-red-600 hover:bg-red-100"
									>
										Delete User
									</a>
								</div>
							</div>
						</div>
						<div>
							<!-- Filter by Partners -->
							<button
								id="dropdownRadioButton"
								data-dropdown-toggle="dropdownRadio"
								class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 focus:outline-none focus:ring-4 focus:ring-gray-100 md:text-sm"
								type="button"
							>
								<svg
									class="me-3 size-4 text-gray-500"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
								>
									<path
										stroke="currentColor"
										stroke-linecap="round"
										stroke-linejoin="round"
										stroke-width="2"
										d="M16.9 9.7 20 6.6 17.4 4 4 17.4 6.6 20 16.9 9.7Zm0 0L14.3 7M6 7v2m0 0v2m0-2H4m2 0h2m7 7v2m0 0v2m0-2h-2m2 0h2M8 4h0v0h0v0Zm2 2h0v0h0v0Zm2-2h0v0h0v0Zm8 8h0v0h0v0Zm-2 2h0v0h0v0Zm2 2h0v0h0v0Z"
									/>
								</svg>
								Partners
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
								<span class="sr-only">Partners filter button</span>
							</button>
							<!-- Dropdown menu -->
							<div
								id="dropdownRadio"
								class="z-10 hidden w-52 divide-y divide-gray-100 rounded-lg bg-white shadow"
								data-popper-reference-hidden=""
								data-popper-escaped=""
								data-popper-placement="top"
								style="
									position: absolute;
									inset: auto auto 0px 0px;
									margin: 0px;
									transform: translate3d(522.5px, 3847.5px, 0px);
								"
							>
								<ul
									class="space-y-1 p-3 text-sm text-gray-700"
									aria-labelledby="dropdownRadioButton"
								>
									<li>
										<div
											class="flex items-center rounded px-3 py-2 hover:bg-brand-100"
										>
											<input
												id="filter-radio-example-1"
												type="radio"
												value=""
												name="filter-radio"
												class="focus:ring-brand-300 size-4 border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>

											<div
												class="ml-4 inline-flex items-center justify-center"
											>
												<img
													class="size-6 rounded-full"
													src="https://api.multiavatar.com/BinxBond.png"
													alt=""
												/>
												<label
													for="filter-radio-example-1"
													class="ms-2 w-full rounded text-sm font-medium text-gray-900"
												>
													Trekkscooters
												</label>
											</div>
										</div>
									</li>
									<li>
										<div
											class="flex items-center rounded px-3 py-2 hover:bg-brand-100"
										>
											<input
												checked=""
												id="filter-radio-example-2"
												type="radio"
												value=""
												name="filter-radio"
												class="focus:ring-brand-300 size-4 border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>

											<div
												class="ml-4 inline-flex shrink-0 items-center justify-center"
											>
												<img
													class="size-6 rounded-full"
													src="https://api.multiavatar.com/CHXd.png"
													alt=""
												/>
												<label
													for="filter-radio-example-2"
													class="ms-2 w-full rounded text-sm font-medium text-gray-900"
												>
													CHX Houston
												</label>
											</div>
										</div>
									</li>
									<li>
										<div
											class="flex items-center rounded px-3 py-2 hover:bg-brand-100"
										>
											<input
												id="filter-radio-example-3"
												type="radio"
												value=""
												name="filter-radio"
												class="focus:ring-brand-300 size-4 border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>

											<div
												class="ml-4 inline-flex shrink-0 items-center justify-center"
											>
												<img
													class="size-6 rounded-full"
													src="https://api.multiavatar.com/andred.png"
													alt=""
												/>
												<label
													for="filter-radio-example-3"
													class="ms-2 w-full rounded text-sm font-medium text-gray-900"
												>
													Repurpose SLB
												</label>
											</div>
										</div>
									</li>
									<li>
										<div
											class="flex items-center rounded px-3 py-2 hover:bg-brand-100"
										>
											<input
												id="filter-radio-example-4"
												type="radio"
												value=""
												name="filter-radio"
												class="focus:ring-brand-300 size-4 border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>

											<div
												class="ml-4 inline-flex shrink-0 items-center justify-center"
											>
												<img
													class="size-6 rounded-full"
													src="https://api.multiavatar.com/dfgtyj.png"
													alt=""
												/>
												<label
													for="filter-radio-example-4"
													class="ms-2 w-full rounded text-sm font-medium text-gray-900"
												>
													Empowr
												</label>
											</div>
										</div>
									</li>
									<li>
										<div
											class="flex items-center rounded px-3 py-2 hover:bg-brand-100"
										>
											<input
												id="filter-radio-example-5"
												type="radio"
												value=""
												name="filter-radio"
												class="focus:ring-brand-300 size-4 border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>

											<div
												class="ml-4 inline-flex shrink-0 items-center justify-center"
											>
												<img
													class="size-6 rounded-full"
													src="https://api.multiavatar.com/lbawerty.png"
													alt=""
												/>
												<label
													for="filter-radio-example-5"
													class="ms-2 w-full rounded text-sm font-medium text-gray-900"
												>
													Targett
												</label>
											</div>
										</div>
									</li>
								</ul>
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
							class="focus:ring-brand-300 block w-full max-w-md rounded-lg border border-gray-300 bg-gray-50 ps-10 text-xs text-gray-600 focus:border-brand-400 md:text-sm"
							placeholder="Search for riders"
						/>
					</div>
				</div>

				<div class="overflow-hidden shadow">
					<div class="relative overflow-x-auto">
						<table
							id="riders-list"
							class="w-full text-left text-sm text-gray-500 rtl:text-right"
						>
							<thead class="bg-gray-50 text-xs uppercase text-gray-500">
								<tr>
									<th scope="col" class="p-4">
										<div class="flex items-center">
											<input
												id="checkbox-all-riders"
												type="checkbox"
												class="focus:ring-brand-300 size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>
											<label for="checkbox-all-riders" class="sr-only">
												checkbox
											</label>
										</div>
									</th>
									<th scope="col" class="px-4 py-3">
										<div class="flex items-center">
											<span class="shrink-0">Full name</span>

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
											<span class="shrink-0">Email</span>

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
											<span class="shrink-0">Can lock?</span>

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
											<span class="shrink-0">Date Created</span>

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
								<!-- Table row dynamically generated -->
							</tbody>
						</table>
					</div>
				</div>

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
							<div class="flex items-start justify-between rounded-t border-b p-4">
								<div class="flex flex-col">
									<h3 class="text-xl font-semibold text-gray-900">Edit rider</h3>
									<p class="text-sm text-gray-500">
										Edit rider profile information
									</p>
								</div>
								<button
									type="button"
									class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											placeholder="e.g. +(234) 000 3456 789"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="gender"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Gender
										</label>
										<select
											name="gender"
											id="gender"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											required=""
										>
											<option value="">Select</option>
											<option value="Abuja">Male</option>
											<option value="Lagos">Female</option>
										</select>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label
											for="community"
											class="mb-2 block text-sm font-medium text-gray-900"
										>
											Community
										</label>
										<select
											name="community"
											id="community"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											required=""
										>
											<option value="">Select community</option>
											<option value="Abuja">Abuja</option>
											<option value="Lagos">Lagos</option>
											<option value="Run">Run</option>
											<option value="Bells">Bells</option>
											<option value="Ikoyi">Ikoyi</option>
											<option value="ABU">ABU</option>
											<option value="Futa">Futa</option>
										</select>
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
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
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											placeholder="••••••••"
											required=""
										/>
									</div>
								</div>
							</div>
							<!-- Modal footer -->
							<div
								class="flex items-center space-x-3 rounded-b border-t border-gray-200 p-6 rtl:space-x-reverse"
							>
								<button
									type="submit"
									class="rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"
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
