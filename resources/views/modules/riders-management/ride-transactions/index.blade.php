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
							<span class="text-xs font-medium text-gray-500">Ride transactions</span>
						</div>
					</li>
				</ol>
			</nav>
		</div>

		<div class="rounded-lg border border-gray-200 bg-white p-4">
			<div class="mt-4 space-y-1 px-4">
				<h3 class="text-3xl font-semibold text-gray-700">Riders management</h3>
				<p class="text-sm text-gray-500">Manage users, rides and transactions</p>
			</div>

			<div class="relative mt-4 flex w-auto items-end justify-between px-4 py-5">
				<div class="flex">
					<div class="mr-5 shrink-0">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="size-10 text-brand-400"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3"
							/>
						</svg>
					</div>
					<div>
						<div class="text-xl font-medium text-gray-600">Ride Transactions</div>
						<p class="text-sm text-zinc-500">See all rides transactions here</p>
					</div>
				</div>

				<button
					type="button"
					class="inline-flex items-center rounded bg-transparent px-3.5 py-2 text-sm font-medium text-gray-500 hover:cursor-pointer hover:bg-brand-100 hover:text-brand-400 hover:underline"
				>
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="me-1 size-4"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3"
						/>
					</svg>
					Download csv
				</button>
			</div>

			<hr class="my-4" />

			{{-- Table --}}

			<div class="flex flex-col rounded bg-white px-2">
				<div
					class="flex-column flex flex-col items-start space-y-2 pb-4 md:flex-row md:items-center md:justify-between md:space-y-0"
				>
					<div
						class="flex-column flex items-center justify-between gap-2 md:flex-row md:items-center"
					>
						<span>
							<svg
								class="size-5 text-gray-600"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="none"
								viewBox="0 0 24 24"
							>
								<path
									stroke="currentColor"
									stroke-linecap="round"
									stroke-width="1.5"
									d="M18.8 4H5.2a1 1 0 0 0-.7 1.7l5.3 6 .2.7v4.8c0 .2 0 .4.2.4l3 2.3c.3.2.8 0 .8-.4v-7.1c0-.3 0-.5.2-.7l5.3-6a1 1 0 0 0-.7-1.7Z"
								/>
							</svg>
						</span>
						<div>
							<button
								type="button"
								id="dropdownActionButton"
								data-dropdown-toggle="dropdownAction"
								class="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
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
								class="z-10 hidden w-48 divide-y divide-gray-200 rounded-lg bg-white shadow"
							>
								<ul
									class="px-2 py-1 text-sm font-medium text-gray-700"
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
								<div class="px-2 py-1">
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
								type="button"
								id="dropdownRadioButton"
								data-dropdown-toggle="partnersDropdownRadio"
								class="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
							>
								<span class="sr-only">Partners filter button</span>
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
							</button>
							<!-- Dropdown menu -->
							<div
								id="partnersDropdownRadio"
								class="z-10 hidden w-52 rounded-lg bg-white shadow"
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
									class="max-h-52 space-y-1 overflow-y-auto p-3 text-xs font-medium capitalize text-gray-700 md:text-sm"
									aria-labelledby="dropdownRadioButton"
								>
									<li>
										<label
											for="patners-filter-radio-1"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="patners-filter-radio-1"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-4 inline-flex items-center justify-center gap-2"
												>
													<img
														class="size-8 rounded-full border-2 border-white"
														src="https://api.multiavatar.com/BinxBond.png"
														alt=""
													/>

													Trekkscooters
												</div>
											</div>
										</label>
									</li>
									<li>
										<label
											for="patners-filter-radio-2"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="patners-filter-radio-2"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-4 inline-flex items-center justify-center gap-2"
												>
													<img
														class="size-8 rounded-full border-2 border-white"
														src="https://api.multiavatar.com/BinxBond.png"
														alt=""
													/>

													Evolve media
												</div>
											</div>
										</label>
									</li>
									<li>
										<label
											for="patners-filter-radio-3"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="patners-filter-radio-3"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-4 inline-flex items-center justify-center gap-2"
												>
													<img
														class="size-8 rounded-full border-2 border-white"
														src="https://api.multiavatar.com/rundakc.png"
														alt=""
													/>

													Run ltd
												</div>
											</div>
										</label>
									</li>
									<li>
										<label
											for="patners-filter-radio-4"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="patners-filter-radio-4"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-4 inline-flex items-center justify-center gap-2"
												>
													<img
														class="size-8 rounded-full border-2 border-white"
														src="https://api.multiavatar.com/xajdgui.png"
														alt=""
													/>

													xanilucan
												</div>
											</div>
										</label>
									</li>
									<li>
										<label
											for="patners-filter-radio-5"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="patners-filter-radio-5"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-4 inline-flex items-center justify-center gap-2"
												>
													<img
														class="size-8 rounded-full border-2 border-white"
														src="https://api.multiavatar.com/tuyrekkd.png"
														alt=""
													/>

													Digiless
												</div>
											</div>
										</label>
									</li>
								</ul>
							</div>
						</div>

						<div>
							<!-- Filter by Status -->
							<button
								type="button"
								id="statusDropdownRadioButton"
								data-dropdown-toggle="statusDropdownAction"
								class="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
							>
								<span class="sr-only">Status filter button</span>
								Status
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
								id="statusDropdownAction"
								class="z-10 hidden w-40 rounded-lg bg-white shadow"
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
									class="space-y-1 p-3 text-xs font-medium capitalize text-gray-700 md:text-sm"
									aria-labelledby="statusDropdownRadioButton"
								>
									<li>
										<label
											for="status-filter-radio-1"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="status-filter-radio-1"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-3 inline-flex items-center justify-center gap-2"
												>
													<div
														class="me-0.5 size-2 rounded-full bg-green-500"
													></div>

													Successful
												</div>
											</div>
										</label>
									</li>
									<li>
										<label
											for="status-filter-radio-2"
											class="w-full cursor-pointer"
										>
											<div
												class="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100"
											>
												<input
													id="status-filter-radio-2"
													type="radio"
													value=""
													name="filter-radio"
													class="size-4 border-gray-300 bg-gray-100 text-brand-400"
												/>

												<div
													class="ms-3 inline-flex items-center justify-center gap-2"
												>
													<div
														class="me-0.5 size-2 rounded-full bg-red-500"
													></div>

													Failed
												</div>
											</div>
										</label>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="relative w-full md:w-auto">
						<label for="table-search" class="sr-only">Search</label>
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
							id="ride-transactions-list"
							class="w-full text-left text-sm text-gray-500 rtl:text-right"
						>
							<thead class="bg-gray-50 text-xs uppercase text-gray-500">
								<tr>
									<th scope="col" class="p-4">
										<div class="flex items-center">
											<input
												id="check-all-ride-transactions"
												type="checkbox"
												class="focus:ring-brand-300 size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
											/>
											<label
												for="check-all-ride-transactions"
												class="sr-only"
											>
												checkbox
											</label>
										</div>
									</th>
									<th scope="col" class="px-4 py-3">
										<div class="flex items-center">
											<span class="shrink-0">Full name</span>

											<a href="#">
												<svg
													class="ms-1.5 size-3"
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
													class="ms-1.5 size-3"
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
											<span class="shrink-0">Date</span>
										</div>
									</th>
									<th scope="col" class="px-4 py-3">
										<div class="flex items-center">
											<span class="shrink-0">Ride ID</span>
										</div>
									</th>
									<th scope="col" class="px-4 py-3">
										<div class="flex items-center">
											<span class="shrink-0">Method</span>

											<a href="#">
												<svg
													class="ms-1.5 size-3"
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
											<span class="shrink-0">Duration</span>

											<a href="#">
												<svg
													class="ms-1.5 size-3"
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
										<div class="mr-2 flex items-center">
											<span class="shrink-0">Unlock Fee</span>

											<a href="#">
												<svg
													class="ms-1.5 size-3"
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
											<span class="shrink-0">Amount</span>

											<a href="#">
												<svg
													class="ms-1.5 size-3"
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

				<!-- Pagination -->
				<nav
					class="flex-column flex flex-wrap items-center justify-between pt-4 md:flex-row"
					aria-label="Table navigation"
				>
					<span
						class="mb-4 block w-full text-sm font-normal text-gray-500 md:mb-0 md:inline md:w-auto"
					>
						Showing
						<span class="font-semibold text-gray-600">1-10</span>
						of
						<span class="font-semibold text-gray-600">1000</span>
					</span>
					<ul class="inline-flex h-8 -space-x-px text-sm rtl:space-x-reverse">
						<li>
							<a
								href="#"
								class="ms-0 flex h-8 items-center justify-center rounded-s-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
							>
								Previous
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
							>
								1
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
							>
								2
							</a>
						</li>
						<li>
							<a
								href="#"
								aria-current="page"
								class="flex h-8 items-center justify-center border border-gray-300 bg-blue-50 px-3 text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-600"
							>
								3
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
							>
								4
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
							>
								5
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800"
							>
								Next
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
@endsection
