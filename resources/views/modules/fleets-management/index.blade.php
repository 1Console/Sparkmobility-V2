@extends("layouts.authenticated_layout")

@section("content")
	<div class="mx-auto hidden h-auto w-full py-8 md:px-4 lg:max-w-7xl"></div>

	<div class="flex h-auto flex-col lg:h-full lg:flex-1 lg:flex-row">
		<section class="my-8 flex w-full px-4 md:overflow-y-auto md:px-8">
			<div class="flex w-full flex-1 flex-col">
				<!-- Breadcrumb -->
				<div class="bcrumbs"></div>

				<div class="rounded-lg border border-gray-200 bg-white p-4">
					<div class="mt-4 space-y-1 px-4">
						<h3 class="text-3xl font-semibold text-gray-700">Fleets management</h3>
						<p class="text-sm text-gray-500">Manage all admin fleets here</p>
					</div>

					<hr class="my-4" />

					<div class="mb-8">
						<!-- CRUD Form -->
						<form class="relative rounded-lg bg-white">
							<div class="space-y-6 p-6">
								<div class="grid grid-cols-6 gap-6">
									<div class="col-span-6 sm:col-span-3">
										<label for="fleet-name" class="mb-2 block font-medium">
											Fleet Name
										</label>
										<input
											type="text"
											name="fleet-name"
											id="fleet-name"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											placeholder="Enter fleet name"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label for="location" class="mb-2 block font-medium">
											Location
										</label>
										<input
											type="text"
											name="location"
											id="location"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											placeholder="Enter location address"
											required=""
										/>
									</div>
									<div class="col-span-6 sm:col-span-3">
										<label for="assign-to" class="mb-2 block font-medium">
											Assign to
										</label>
										<select
											name="assign-to"
											id="assign-to"
											class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
											required=""
										>
											<option value="">Select</option>
											<option value="Abuja">Abuja</option>
											<option value="Lagos">Lagos</option>
											<option value="Run">Run</option>
											<option value="Bells">Bells</option>
											<option value="Ikoyi">Ikoyi</option>
											<option value="ABU">ABU</option>
											<option value="Futa">Futa</option>
										</select>
									</div>
								</div>
								<div class="block">
									<button
										type="submit"
										class="w-full rounded-lg bg-brand-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-brand-400 focus:outline-none focus:ring-4 focus:ring-brand-100 md:w-28"
									>
										Add fleet
									</button>
								</div>
							</div>
						</form>
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
												<a
													href="#"
													class="block px-4 py-2 hover:bg-brand-100"
												>
													Reward
												</a>
											</li>
											<li>
												<a
													href="#"
													class="block px-4 py-2 hover:bg-brand-100"
												>
													Can lock scooter
												</a>
											</li>
											<li>
												<a
													href="#"
													class="block px-4 py-2 hover:bg-brand-100"
												>
													Activate account
												</a>
											</li>
											<li>
												<a
													href="#"
													class="block px-4 py-2 hover:bg-brand-100"
												>
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
									id="active-rides-list"
									class="w-full text-left text-sm text-gray-500 rtl:text-right"
								>
									<thead class="bg-gray-50 text-xs uppercase text-gray-500">
										<tr>
											<th scope="col" class="p-4">
												<div class="flex items-center">
													<input
														id="check-all-active-rides"
														type="checkbox"
														class="focus:ring-brand-300 size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
													/>
													<label
														for="check-all-active-rides"
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
													<span class="shrink-0">Device Name</span>
												</div>
											</th>
											<th scope="col" class="px-4 py-3">
												<div class="flex items-center">
													<span class="shrink-0">Fleet</span>
												</div>
											</th>
											<th scope="col" class="px-4 py-3">
												<div class="flex items-center">
													<span class="shrink-0">Ride Start</span>

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
												<div
													class="flex max-w-sm items-center overflow-hidden truncate xl:max-w-xs"
												>
													<span class="me-4 shrink-0">Ride Distance</span>
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
		</section>

		<aside
			class="hidden h-auto w-full flex-shrink-0 flex-col border-l border-gray-200 bg-white shadow duration-75 md:flex lg:ml-8 lg:w-80 lg:overflow-y-auto"
			aria-label="Sidebar"
		>
			<div class="mt-5 flex h-full flex-1 flex-col px-4">
				<!-- partners, promos, tickets -->
				@include("partials.partners_overview")

				{{-- promos --}}
				@include("partials.promos_overview")

				{{-- tickets --}}
				@include("partials.tickets_overview")
			</div>
		</aside>
	</div>
@endsection
