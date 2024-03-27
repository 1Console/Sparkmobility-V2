import React from "react";

export default function AdminOverview() {
	return (
		<div className="mb-5 rounded-lg bg-red-100 py-4 md:p-8">
			<div className="mx-auto w-full max-w-screen-xxl px-4 lg:px-0">
				<div className="relative flex flex-col gap-8 overflow-hidden dark:bg-gray-800 sm:rounded-lg">
					<div className="flex flex-col items-center justify-between space-y-3 md:flex-row md:gap-4 md:space-y-0">
						<div className="w-full md:w-1/2">
							<form className="flex items-center">
								<label htmlFor="simple-search" className="sr-only">
									Search
								</label>
								<div className="relative w-full">
									<div className="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
										<svg
											aria-hidden="true"
											className="size-5 text-gray-500 dark:text-gray-400"
											fill="currentColor"
											viewBox="0 0 20 20"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												fillRule="evenodd"
												d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
												clipRule="evenodd"
											/>
										</svg>
									</div>
									<input
										type="text"
										id="simple-search"
										className="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
										placeholder="Search"
										required=""
									/>
								</div>
							</form>
						</div>
						<div className="flex w-full shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
							<div className="flex w-full items-center space-x-3 md:w-auto">
								<button
									id="actionsDropdownButton"
									data-dropdown-toggle="actionsDropdown"
									className="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
									type="button"
								>
									<svg
										className="-ml-1 mr-1.5 size-5"
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
									>
										<path
											clipRule="evenodd"
											fillRule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
										/>
									</svg>
									Actions
								</button>
								<div
									id="actionsDropdown"
									className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
								>
									<ul
										className="py-1 text-sm text-gray-700 dark:text-gray-200"
										aria-labelledby="actionsDropdownButton"
									>
										<li>
											<a
												href="#"
												className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
											>
												Mass Edit
											</a>
										</li>
									</ul>
									<div className="py-1">
										<a
											href="#"
											className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
										>
											Delete all
										</a>
									</div>
								</div>
								<button
									id="filterDropdownButton"
									data-dropdown-toggle="filterDropdown"
									className="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
									type="button"
								>
									<svg
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
										className="mr-2 size-4 text-gray-400"
										viewBox="0 0 20 20"
										fill="currentColor"
									>
										<path
											fillRule="evenodd"
											d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
											clipRule="evenodd"
										/>
									</svg>
									Filter
									<svg
										className="-mr-1 ml-1.5 size-5"
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
										aria-hidden="true"
									>
										<path
											clipRule="evenodd"
											fillRule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
										/>
									</svg>
								</button>
								<div
									id="filterDropdown"
									className="z-10 hidden w-48 rounded-lg bg-white p-3 shadow dark:bg-gray-700"
								>
									<h6 className="mb-3 text-sm font-medium text-gray-900 dark:text-white">
										Choose brand
									</h6>
									<ul
										className="space-y-2 text-sm"
										aria-labelledby="filterDropdownButton"
									>
										<li className="flex items-center">
											<input
												id="apple"
												type="checkbox"
												value=""
												className="size-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
											/>
											<label
												htmlFor="apple"
												className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
											>
												Voi Scooter (19)
											</label>
										</li>
										<li className="flex items-center">
											<input
												id="fitbit"
												type="checkbox"
												value=""
												className="size-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
											/>
											<label
												htmlFor="fitbit"
												className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
											>
												Scoot (29)
											</label>
										</li>
										<li className="flex items-center">
											<input
												id="razor"
												type="checkbox"
												value=""
												className="size-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
											/>
											<label
												htmlFor="razor"
												className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
											>
												Beam (49)
											</label>
										</li>
										<li className="flex items-center">
											<input
												id="nikon"
												type="checkbox"
												value=""
												className="size-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
											/>
											<label
												htmlFor="nikon"
												className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
											>
												Bunny (12)
											</label>
										</li>
										<li className="flex items-center">
											<input
												id="benq"
												type="checkbox"
												value=""
												className="size-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600"
											/>
											<label
												htmlFor="benq"
												className="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100"
											>
												Circ (74)
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div className="overflow-x-auto">
						<table className="w-full text-left text-sm text-gray-500 dark:text-gray-400">
							<thead className="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
								<tr>
									<th scope="col" className="px-4 py-3">
										Partners
										<p className="capitalize">*Click Admin you want to see</p>
									</th>
									<th scope="col" className="px-4 py-3">
										Countries
									</th>
									<th scope="col" className="px-4 py-3">
										Rider/Users
									</th>
									<th scope="col" className="px-4 py-3">
										Fleets
									</th>
									<th scope="col" className="px-4 py-3">
										Vehicles
									</th>
									<th scope="col" className="px-4 py-3">
										<span className="sr-only">Actions</span>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
								<tr className="border-b dark:border-gray-700">
									<th
										scope="row"
										className="whitespace-nowrap px-4 py-3 font-medium text-gray-900 dark:text-white"
									>
										<div className="m-0 flex items-center justify-start gap-2 p-0">
											<img
												src="images/partners/partnerImage1.png"
												className="size-5"
												alt=""
											/>
											<p className="text-xs">VOI scooter</p>
										</div>
									</th>
									<td className="px-4 py-3">Nigeria</td>
									<td className="px-4 py-3">1,589,900</td>
									<td className="px-4 py-3">200</td>
									<td className="px-4 py-3">2,000,000</td>
									<td className="flex items-center justify-end px-4 py-3">
										<button
											id="apple-imac-27-dropdown-button"
											data-dropdown-toggle="apple-imac-27-dropdown"
											className="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
											type="button"
										>
											<svg
												className="size-5"
												aria-hidden="true"
												fill="currentColor"
												viewBox="0 0 20 20"
												xmlns="http://www.w3.org/2000/svg"
											>
												<path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
											</svg>
										</button>
										<div
											id="apple-imac-27-dropdown"
											className="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700"
										>
											<ul
												className="py-1 text-sm text-gray-700 dark:text-gray-200"
												aria-labelledby="apple-imac-27-dropdown-button"
											>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Show
													</a>
												</li>
												<li>
													<a
														href="#"
														className="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
													>
														Edit
													</a>
												</li>
											</ul>
											<div className="py-1">
												<a
													href="#"
													className="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
												>
													Delete
												</a>
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<nav
						className="flex flex-col items-start justify-between space-y-3 p-4 md:flex-row md:items-center md:space-y-0"
						aria-label="Table navigation"
					>
						<span className="text-sm font-normal text-gray-500 dark:text-gray-400">
							Showing
							<span className="font-semibold text-gray-900 dark:text-white">1-10</span>
							of
							<span className="font-semibold text-gray-900 dark:text-white">1000</span>
						</span>
						<ul className="inline-flex items-stretch -space-x-px">
							<li>
								<a
									href="#"
									className="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									<span className="sr-only">Previous</span>
									<svg
										className="size-5"
										aria-hidden="true"
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											fillRule="evenodd"
											d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
											clipRule="evenodd"
										/>
									</svg>
								</a>
							</li>
							<li>
								<a
									href="#"
									className="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									1
								</a>
							</li>
							<li>
								<a
									href="#"
									className="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									2
								</a>
							</li>
							<li>
								<a
									href="#"
									aria-current="page"
									className="z-10 flex items-center justify-center border border-primary-300 bg-primary-50 px-3 py-2 text-sm leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white"
								>
									3
								</a>
							</li>
							<li>
								<a
									href="#"
									className="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									...
								</a>
							</li>
							<li>
								<a
									href="#"
									className="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									100
								</a>
							</li>
							<li>
								<a
									href="#"
									className="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
								>
									<span className="sr-only">Next</span>
									<svg
										className="size-5"
										aria-hidden="true"
										fill="currentColor"
										viewBox="0 0 20 20"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											fillRule="evenodd"
											d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
											clipRule="evenodd"
										/>
									</svg>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	);
}
