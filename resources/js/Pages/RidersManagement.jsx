import React from "react";

export default function RidersManagement() {
	return (
		<div className="mx-auto h-auto w-full py-8 md:px-4 lg:max-w-7xl">
			{/* <!-- Breadcrumb --> */}
			<div className="bcrumbs"></div>
			
			<div className="rounded-lg border border-gray-200 bg-white p-6">
				<div className="mt-4 space-y-1 px-4">
					<h3 className="text-3xl font-semibold text-gray-700">Riders management</h3>
					<p className="text-sm text-gray-500">Manage users, rides and transactions</p>
				</div>

				<div className="relative mt-4 flex w-auto items-center px-4 py-5">
					<div className="mr-5 shrink-0">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							strokeWidth="1.5"
							stroke="currentColor"
							className="size-10 text-brand-400"
						>
							<path
								strokeLinecap="round"
								strokeLinejoin="round"
								d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3"
							/>
						</svg>
					</div>
					<div>
						<div className="relative text-xl font-medium text-gray-600">
							<span className="absolute -top-7 right-0 rounded-full bg-brand-100 px-2 text-xxs font-medium tracking-wide text-brand-400">
								505 Active
							</span>
							Riders
						</div>
						<p className="text-sm text-zinc-500">Monitor all user’s account here</p>
					</div>
				</div>

				<hr className="my-4" />

				{/* {{-- Table --}} */}

				<div className="flex flex-col rounded bg-white px-2">
					<div className="flex flex-col items-start space-y-2 pb-4 md:flex-row md:items-center md:justify-between md:space-y-0">
						<div className="flex items-center justify-between gap-2 md:flex-row md:items-center">
							<span>
								<svg
									className="size-5 text-gray-600"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 24 24"
								>
									<path
										stroke="currentColor"
										strokeLinecap="round"
										strokeWidth="1.5"
										d="M18.8 4H5.2a1 1 0 0 0-.7 1.7l5.3 6 .2.7v4.8c0 .2 0 .4.2.4l3 2.3c.3.2.8 0 .8-.4v-7.1c0-.3 0-.5.2-.7l5.3-6a1 1 0 0 0-.7-1.7Z"
									/>
								</svg>
							</span>
							<div>
								<button
									type="button"
									id="dropdownActionButton"
									data-dropdown-toggle="dropdownAction"
									className="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
								>
									<span className="sr-only">Action button</span>
									Action
									<svg
										className="ms-2.5 size-2.5"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 10 6"
									>
										<path
											stroke="currentColor"
											strokeLinecap="round"
											strokeLinejoin="round"
											strokeWidth="2"
											d="m1 1 4 4 4-4"
										/>
									</svg>
								</button>
								{/* Dropdown menu */}
								{/* Add your dropdown menu here */}
							</div>
							<div>
								<button
									type="button"
									id="statusDropdownRadioButton"
									data-dropdown-toggle="statusDropdownAction"
									className="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
								>
									<span className="sr-only">Status filter button</span>
									Status
									<svg
										className="ms-2.5 size-2.5"
										aria-hidden="true"
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 10 6"
									>
										<path
											stroke="currentColor"
											strokeLinecap="round"
											strokeLinejoin="round"
											strokeWidth="2"
											d="m1 1 4 4 4-4"
										/>
									</svg>
								</button>
								{/* Dropdown menu */}
								<div
									id="statusDropdownAction"
									className="z-10 hidden w-40 rounded-lg bg-white shadow"
									data-popper-reference-hidden=""
									data-popper-escaped=""
									data-popper-placement="top"
									style={{
										position: "absolute",
										inset: "auto auto 0px 0px",
										margin: "0px",
										transform: "translate3d(522.5px, 3847.5px, 0px)",
									}}
								>
									<ul
										className="space-y-1 p-3 text-xs font-medium capitalize text-gray-700 md:text-sm"
										aria-labelledby="statusDropdownRadioButton"
									>
										<li>
											<label
												htmlFor="status-filter-radio-1"
												className="w-full cursor-pointer"
											>
												<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
													<input
														id="status-filter-radio-1"
														type="radio"
														value=""
														name="filter-radio"
														className="size-4 border-gray-300 bg-gray-100 text-brand-400"
													/>
													<span className="ms-4 inline-flex">Active</span>
												</div>
											</label>
										</li>
										<li>
											<label
												htmlFor="status-filter-radio-2"
												className="w-full cursor-pointer"
											>
												<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
													<input
														id="status-filter-radio-2"
														type="radio"
														value=""
														name="filter-radio"
														className="size-4 border-gray-300 bg-gray-100 text-brand-400"
													/>
													<span className="ms-4 inline-flex">
														In-Active
													</span>
												</div>
											</label>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div className="relative w-full md:w-auto">
							<label htmlFor="table-search" className="sr-only">
								Search
							</label>
							<div className="rtl:inset-r-0 pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
								<svg
									className="size-4 text-gray-500"
									aria-hidden="true"
									xmlns="http://www.w3.org/2000/svg"
									fill="none"
									viewBox="0 0 20 20"
								>
									<path
										stroke="currentColor"
										strokeLinecap="round"
										strokeLinejoin="round"
										strokeWidth="2"
										d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"
									/>
								</svg>
							</div>
							<input
								type="text"
								id="table-search-users"
								className="focus:ring-brand-300 block w-full max-w-md rounded-lg border border-gray-300 bg-gray-50 ps-10 text-xs text-gray-600 focus:border-brand-400 md:text-sm"
								placeholder="Search for riders"
							/>
						</div>
					</div>

					{/* <!-- Pagination --> */}
					<nav
						className="flex flex-wrap items-center justify-between pt-4 md:flex-row"
						aria-label="Table navigation"
					>
						<span className="mb-4 block w-full text-sm font-normal text-gray-500 md:mb-0 md:inline md:w-auto">
							Showing <span className="font-semibold text-gray-600">1-10</span> of{" "}
							<span className="font-semibold text-gray-600">1000</span>
						</span>
						<ul className="inline-flex h-8 -space-x-px text-sm rtl:space-x-reverse">
							<li>
								<a
									href="#"
									className="flex h-8 items-center justify-center rounded-s-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700"
								>
									Previous
								</a>
							</li>
							{[1, 2, 3, 4, 5].map((page) => (
								<li key={page}>
									<a
										href="#"
										className={`flex h-8 items-center justify-center border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 ${page === 3 ? "bg-blue-50 text-blue-600 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-600" : ""}`}
									>
										{page}
									</a>
								</li>
							))}
							<li>
								<a
									href="#"
									className="flex h-8 items-center justify-center rounded-e-lg border border-gray-300 bg-white px-3 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800"
								>
									Next
								</a>
							</li>
						</ul>
					</nav>

					{/* <!-- Edit user modal --> */}
					<div
						id="editUserModal"
						tabIndex="-1"
						aria-hidden="true"
						className="fixed inset-x-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
					>
						<div className="relative max-h-full w-full max-w-2xl">
							{/* Modal content */}
							<form className="relative rounded-lg bg-white shadow">
								{/* Modal header */}
								<div className="relative flex items-start justify-between rounded-t border-b p-4">
									<div className="flex flex-col">
										<h3 className="text-xl font-semibold text-gray-900">
											Edit rider
										</h3>
										<p className="text-sm text-gray-500">
											Edit rider profile information
										</p>
									</div>
									<button
										type="button"
										className="absolute right-3 top-3 inline-flex size-8 items-center justify-center rounded-full bg-transparent text-sm text-red-600 hover:bg-red-100"
										data-modal-hide="editUserModal"
									>
										<svg
											className="size-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="none"
											viewBox="0 0 14 14"
										>
											<path
												stroke="currentColor"
												strokeLinecap="round"
												strokeLinejoin="round"
												strokeWidth="2"
												d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
											/>
										</svg>
										<span className="sr-only">Close modal</span>
									</button>
								</div>

								{/* Modal body */}
								<div className="space-y-6 p-6">
									<div className="grid grid-cols-6 gap-6">
										<div className="col-span-6 sm:col-span-3">
											<label
												htmlFor="first-name"
												className="mb-2 block font-medium"
											>
												First Name
											</label>
											<input
												type="text"
												name="first-name"
												id="first-name"
												className="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
												placeholder="Bonnie"
												required=""
											/>
										</div>
										{/* Add more input fields as needed */}
									</div>
								</div>

								{/* Modal footer */}
								<div className="flex items-center space-x-3 rounded-b border-t border-gray-200 p-6 rtl:space-x-reverse">
									<button
										type="submit"
										className="rounded-lg bg-brand-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-brand-400 focus:outline-none focus:ring-4 focus:ring-brand-100"
									>
										Save all
									</button>
								</div>
							</form>
						</div>
					</div>

					{/* <!-- User Wallet Modal toggle --> */}
					<div
						id="editUserWalletModal"
						tabIndex="-1"
						aria-hidden="true"
						className="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
					>
						<div className="relative max-h-full w-full max-w-md">
							{/* Modal content */}
							<form className="relative rounded-lg bg-white shadow">
								{/* Modal header */}
								<div className="relative flex items-start justify-between rounded-t border-b p-6">
									<div className="flex flex-col">
										<h3 className="text-xl font-semibold text-gray-900">
											Wallet
										</h3>
										<p className="text-sm text-gray-500">
											Add, Remove or Refund money
										</p>
									</div>
									<button
										type="button"
										className="absolute right-3 top-3 inline-flex size-8 items-center justify-center rounded-full bg-transparent text-sm text-red-600 hover:bg-red-100"
										data-modal-hide="editUserWalletModal"
									>
										<svg
											className="size-3"
											aria-hidden="true"
											xmlns="http://www.w3.org/2000/svg"
											fill="none"
											viewBox="0 0 14 14"
										>
											<path
												stroke="currentColor"
												strokeLinecap="round"
												strokeLinejoin="round"
												strokeWidth="2"
												d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
											/>
										</svg>
										<span className="sr-only">Close modal</span>
									</button>
								</div>

								{/* Modal body */}
								<div className="p-6">
									<div className="flex flex-col gap-1.5">
										<label
											htmlFor="wallet-amount"
											className="mb-2 block font-medium"
										>
											<input
												type="number"
												name="wallet-amount"
												id="wallet-amount"
												className="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-500 shadow-sm focus:border-brand-400 focus:ring-brand-400"
												placeholder="Enter amount"
												required=""
											/>
										</label>
										<div>
											<p className="text-lg font-bold text-gray-700">
												Current balance
												<span className="text-brand-400">N,3000</span>
											</p>
										</div>
									</div>
								</div>

								{/* Modal footer */}
								<div className="rounded-b border-t border-gray-200 p-6 rtl:space-x-reverse">
									<span className="mb-2.5 block text-xs font-semibold uppercase text-gray-400">
										Action
									</span>
									<div className="flex items-center space-x-3">
										<button
											type="button"
											className="rounded-lg bg-brand-400 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-brand-400 focus:outline-none focus:ring-4 focus:ring-brand-100"
										>
											Add
										</button>
										<button
											type="button"
											className="rounded-lg bg-amber-500 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-amber-600 focus:outline-none focus:ring-4 focus:ring-amber-100"
										>
											Refund
										</button>
										<button
											type="button"
											className="rounded-lg bg-red-600 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-red-500 focus:outline-none focus:ring-4 focus:ring-red-100"
										>
											Remove
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}
