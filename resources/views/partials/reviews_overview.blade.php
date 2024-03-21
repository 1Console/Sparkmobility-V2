<div class="rounded-lg bg-white p-8">
	<div class="mb-8">
		<h3 class="text-xl font-extrabold text-[#727272]">Reviews</h3>
		<p>What admins are saying about the product</p>
	</div>

	<div class="mb-8 h-full w-full text-xs">
		<div class="max-w-screen-2xl mx-auto px-4 lg:px-0">
			<!-- Start coding here -->
			<div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
				<div
					class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0"
				>
					<div class="w-full md:w-1/2">
						<form class="flex items-center">
							<label for="simple-search" class="sr-only">Search</label>
							<div class="relative w-full">
								<div
									class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
								>
									<svg
										aria-hidden="true"
										class="h-5 w-5 text-gray-500 dark:text-gray-400"
										fill="currentColor"
										viewbox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											fill-rule="evenodd"
											d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
											clip-rule="evenodd"
										/>
									</svg>
								</div>
								<input
									type="text"
									id="simple-search"
									class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
									placeholder="Search"
									required=""
								/>
							</div>
						</form>
					</div>
					<div
						class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0"
					>
						{{--
          <button type="button" class="flex items-center justify-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
          <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
          </svg>
          Add product
          </button>
      --}}
						<div class="flex w-full items-center space-x-3 md:w-auto">
							<button
								id="actionsDropdownButton2"
								data-dropdown-toggle="actionsDropdown"
								class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
								type="button"
							>
								<svg
									class="-ml-1 mr-1.5 h-5 w-5"
									fill="currentColor"
									viewbox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true"
								>
									<path
										clip-rule="evenodd"
										fill-rule="evenodd"
										d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
									/>
								</svg>
								Actions
							</button>
							<div
								id="actionsDropdown"
								class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
							>
								<ul
									class="py-1 text-sm text-gray-700 dark:text-gray-200"
									aria-labelledby="actionsDropdownButton"
								>
									<li>
										<a
											href="#"
											class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
										>
											Mass Edit
										</a>
									</li>
								</ul>
								<div class="py-1">
									<a
										href="#"
										class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
									>
										Delete all
									</a>
								</div>
							</div>
							<button
								id="filterDropdownButton"
								data-dropdown-toggle="filterDropdown"
								class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
								type="button"
							>
								<svg
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true"
									class="mr-2 h-4 w-4 text-gray-400"
									viewbox="0 0 20 20"
									fill="currentColor"
								>
									<path
										fill-rule="evenodd"
										d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
										clip-rule="evenodd"
									/>
								</svg>
								Filter
								<svg
									class="-mr-1 ml-1.5 h-5 w-5"
									fill="currentColor"
									viewbox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg"
									aria-hidden="true"
								>
									<path
										clip-rule="evenodd"
										fill-rule="evenodd"
										d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
									/>
								</svg>
							</button>
							<div
								id="filterDropdown"
								class="z-10 hidden w-48 rounded-lg bg-white p-3 shadow dark:bg-gray-700"
							>
								<h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
									Choose brand
								</h6>
								<ul
									class="space-y-2 text-sm"
									aria-labelledby="filterDropdownButton"
								>
									<li class="flex items-center">
										<input
											id="apple"
											type="checkbox"
											value=""
											class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
										/>
										<label
											for="apple"
											class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
										>
											Voi Scooter (19)
										</label>
									</li>
									<li class="flex items-center">
										<input
											id="fitbit"
											type="checkbox"
											value=""
											class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
										/>
										<label
											for="fitbit"
											class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
										>
											Scoot (29)
										</label>
									</li>
									<li class="flex items-center">
										<input
											id="razor"
											type="checkbox"
											value=""
											class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
										/>
										<label
											for="razor"
											class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
										>
											Beam (49)
										</label>
									</li>
									<li class="flex items-center">
										<input
											id="nikon"
											type="checkbox"
											value=""
											class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
										/>
										<label
											for="nikon"
											class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
										>
											Bunny (12)
										</label>
									</li>
									<li class="flex items-center">
										<input
											id="benq"
											type="checkbox"
											value=""
											class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
										/>
										<label
											for="benq"
											class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
										>
											Circ (74)
										</label>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="overflow-x-auto">
					<table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
						<thead
							class="bg-gray-50 text-xs text-gray-700 dark:bg-gray-700 dark:text-gray-400"
						>
							<tr>
								<th scope="col" class="px-4 py-3">User</th>
								<th scope="col" class="px-4 py-3">Fleet</th>
								<th scope="col" class="px-4 py-3">Rating</th>
								<th scope="col" class="w-30 px-1 py-3">Ride Time</th>
								<th scope="col" class="px-4 py-3">Duration</th>
								<th scope="col" class="px-4 py-3">Review</th>
								{{--
            <th scope="col" class="px-4 py-3">
            <span class="sr-only">Actions</span>
            </th>
        --}}
							</tr>
						</thead>
						<tbody class="text-xs">
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
							<tr class="border-b dark:border-gray-700">
								<th
									scope="row"
									class="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
								>
									<div class="m-0 flex items-center justify-start gap-2 p-0">
										<img
											src="{{ url("images/partners/partnerImage1.png") }}"
											class="h-5 w-5"
											alt=""
										/>
										<p class="text-xs">VOI scooter</p>
									</div>
								</th>
								<td class="px-4 py-3">Nigeria</td>
								<td class="px-4 py-3">
									<div class="flex items-center justify-between">
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5034)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.22741C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63084 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.22741L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													fill="#4EA685"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5034">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
										<svg
											width="12"
											height="12"
											viewBox="0 0 16 16"
											fill="none"
											xmlns="http://www.w3.org/2000/svg"
										>
											<g clip-path="url(#clip0_131_5038)">
												<path
													fill-rule="evenodd"
													clip-rule="evenodd"
													d="M7.63255 12.9357L4.77598 14.5051C4.39013 14.7171 3.91289 14.5621 3.71003 14.1588C3.62926 13.9983 3.60138 13.8144 3.63073 13.6356L4.17628 10.3116C4.2202 10.044 4.13531 9.77098 3.94928 9.58148L1.63827 7.2274C1.32611 6.90943 1.31972 6.38721 1.624 6.06099C1.74517 5.9311 1.90393 5.84656 2.07572 5.82047L5.26945 5.33551C5.52654 5.29647 5.74879 5.12773 5.86376 4.88428L7.29204 1.86C7.48497 1.4515 7.95826 1.28377 8.34918 1.48538C8.50484 1.56567 8.63083 1.69734 8.70766 1.86L10.1359 4.88428C10.2509 5.12773 10.4732 5.29647 10.7302 5.33551L13.924 5.82047C14.3554 5.88598 14.6543 6.30454 14.5916 6.75536C14.5666 6.93487 14.4857 7.10078 14.3614 7.2274L12.0504 9.58148C11.8644 9.77098 11.7795 10.044 11.8234 10.3116L12.3999 13.6356C12.4736 14.0846 12.1541 14.511 11.7245 14.588C11.5534 14.6187 11.3774 14.5895 11.2237 14.5051L8.36715 12.9357C8.13721 12.8094 7.8625 12.8094 7.63255 12.9357Z"
													stroke="#4EA685"
													stroke-linejoin="round"
												/>
											</g>
											<defs>
												<clipPath id="clip0_131_5038">
													<rect width="16" height="16" fill="white" />
												</clipPath>
											</defs>
										</svg>
									</div>
								</td>
								<td class="px-4 py-3">200</td>
								<td class="px-4 py-3">2,000,000</td>
								<td class="px-4 py-3">
									<p>
										This platform is fantastic! I was trying to better manage
										and create more fleets for business, this made things easy.
										Try adding a range pagination for the forms though.
									</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				<nav
					class="flex flex-col items-start justify-between space-y-3 p-4 md:flex-row md:items-center md:space-y-0"
					aria-label="Table navigation"
				>
					<span class="text-sm font-normal text-gray-500 dark:text-gray-400">
						Showing
						<span class="font-semibold text-gray-900 dark:text-white">1-10</span>
						of
						<span class="font-semibold text-gray-900 dark:text-white">1000</span>
					</span>
					<ul class="inline-flex items-stretch -space-x-px">
						<li>
							<a
								href="#"
								class="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								<span class="sr-only">Previous</span>
								<svg
									class="h-5 w-5"
									aria-hidden="true"
									fill="currentColor"
									viewbox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										fill-rule="evenodd"
										d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
										clip-rule="evenodd"
									/>
								</svg>
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								1
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								2
							</a>
						</li>
						<li>
							<a
								href="#"
								aria-current="page"
								class="z-10 flex items-center justify-center border border-primary-300 bg-primary-50 px-3 py-2 text-sm leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
							>
								3
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								...
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								100
							</a>
						</li>
						<li>
							<a
								href="#"
								class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
							>
								<span class="sr-only">Next</span>
								<svg
									class="h-5 w-5"
									aria-hidden="true"
									fill="currentColor"
									viewbox="0 0 20 20"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
										fill-rule="evenodd"
										d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
										clip-rule="evenodd"
									/>
								</svg>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
</div>
