import React, { useState, useEffect, useRef } from "react";
import { Head } from "@inertiajs/react";
import { faker } from "@faker-js/faker";
import cn from "classnames";
import { format } from "date-fns";
import { Button, Label, Modal, Select, TextInput } from "flowbite-react";

export default function RidersManagement() {
	const [tableData, setTableData] = useState([]);
	const [openEditUserModal, setOpenEditUserModal] = useState(false);
	const [openWalletModal, setOpenWalletModal] = useState(false);
	const walletAmountInputRef = useRef(null);

	useEffect(() => {
		populateTableRows(7); // Populate table with 7 rows on component mount
	}, []);

	function generateRandomUser() {
		const gender = faker.person.sexType();
		const firstName = faker.person.firstName(gender);
		const lastName = faker.person.lastName();
		const email = faker.internet.email({ firstName, lastName });
		const phoneNo = faker.phone.number();
		const company = faker.company.buzzVerb();
		const fleet = faker.location.city();
		const walletBalance = faker.finance.amount({
			min: 0,
			dec: 2,
			symbol: "₦",
			autoFormat: true,
		});
		const fines = faker.finance.amount({ symbol: "₦" });
		const avatar = faker.image.avatar();
		const canUnlock = faker.datatype.boolean();
		const isActive = faker.datatype.boolean();
		const createdDate = faker.date.past();
		const rideId = faker.string.alphanumeric({
			length: { min: 5, max: 8 },
			casing: "upper",
		});
		const rideDistance = faker.number.int({ min: 1, max: 1000 });
		const userStatus = faker.helpers.arrayElement(["online", "offline"]);
		const transactionType = faker.helpers.arrayElement(["credit", "debit"]);
		const transactionMethod = faker.helpers.arrayElement([
			"Card",
			"Coupon",
			"Trekk Admin",
			"Wallet",
		]);
		const transactionAmount = faker.finance.amount({
			min: 50,
			dec: 2,
			symbol: "₦",
			autoFormat: true,
		});
		const unlockFee = faker.finance.amount({ min: 50, max: 50, symbol: "₦", autoFormat: true });
		const transactionStatus = faker.helpers.arrayElement(["successful", "failed"]);
		const paymentStatus = faker.helpers.arrayElement(["paid", "owing"]);
		const rideStatus = faker.helpers.arrayElement(["successful", "failed"]);
		const rideDuration = faker.string.numeric({
			length: { min: 1, max: 3 },
			allowLeadingZeros: true,
		});
		const deviceName = faker.helpers.arrayElement([
			"iPhone",
			"Samsung",
			"Xiaomi",
			"Oppo",
			"Vivo",
			"Tecno",
			"ZTE",
		]);
		const deviceImei = faker.phone.imei();
		return {
			firstName,
			lastName,
			fullName: `${firstName} ${lastName}`,
			avatar,
			company,
			fleet,
			email,
			walletBalance,
			fines,
			gender,
			phoneNo,
			isActive,
			createdDate,
			rideId,
			rideDistance,
			canUnlock,
			userStatus,
			deviceImei,
			deviceName,
			rideStatus,
			rideDuration,
			transactionMethod,
			transactionType,
			transactionAmount,
			transactionStatus,
			paymentStatus,
			unlockFee,
		};
	}

	function populateTableRows(numRows) {
		const data = [];
		for (let i = 0; i < numRows; i++) {
			data.push(generateRandomUser());
		}
		setTableData(data);
	}

	return (
		<>
			<Head title="Riders Management" />

			<div className="mx-auto h-auto w-full py-8 md:px-4 lg:max-w-7xl">
				{/* <!-- Breadcrumb --> */}
				<div className="bcrumbs"></div>

				<div className="rounded-lg border border-gray-200 bg-white p-2 md:p-6">
					<div className="mt-4 space-y-1 px-4">
						<h3 className="text-3xl font-semibold text-gray-700">Riders management</h3>
						<p className="text-sm text-gray-500">
							Manage users, rides and transactions
						</p>
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
							<div className="flex flex-wrap justify-between gap-2 md:flex-row md:items-center">
								<div className="flex">
									<svg
										className="size-5 self-center text-gray-600"
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
								</div>
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
									<div
										id="dropdownAction"
										className="z-10 hidden w-48 divide-y divide-gray-200 rounded-lg bg-white shadow"
									>
										<ul
											className="px-2 py-1 text-sm font-medium text-gray-700"
											aria-labelledby="dropdownActionButton"
										>
											<li>
												<a
													href="#"
													className="block px-4 py-2 hover:bg-brand-100"
												>
													Reward
												</a>
											</li>
											<li>
												<a
													href="#"
													className="block px-4 py-2 hover:bg-brand-100"
												>
													Can lock scooter
												</a>
											</li>
											<li>
												<a
													href="#"
													className="block px-4 py-2 hover:bg-brand-100"
												>
													Activate account
												</a>
											</li>
											<li>
												<a
													href="#"
													className="block px-4 py-2 hover:bg-brand-100"
												>
													Deactivate account
												</a>
											</li>
										</ul>
										<div className="px-2 py-1">
											<a
												href="#"
												className="block px-4 py-2 text-sm text-red-600 hover:bg-red-100"
											>
												Delete User
											</a>
										</div>
									</div>
								</div>

								{/* <!-- Filter by Partners --> */}
								<div>
									<button
										type="button"
										id="dropdownRadioButton"
										data-dropdown-toggle="partnersDropdownRadio"
										className="inline-flex items-center rounded bg-white px-3 py-2.5 text-xs font-medium text-gray-500 hover:bg-brand-100 md:text-sm"
									>
										<span className="sr-only">Partners filter button</span>
										Partners
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
									{/* <!-- Dropdown menu --> */}
									<div
										id="partnersDropdownRadio"
										className="absolute left-0 top-0 z-10 hidden w-52 rounded-lg bg-white shadow"
										data-popper-reference-hidden=""
										data-popper-escaped=""
										data-popper-placement="top"
									>
										<ul
											className="max-h-52 space-y-1 overflow-y-auto p-3 text-xs font-medium capitalize text-gray-700 md:text-sm"
											aria-labelledby="dropdownRadioButton"
										>
											<li>
												<label
													htmlFor="patners-filter-radio-1"
													className="w-full cursor-pointer"
												>
													<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
														<input
															id="patners-filter-radio-1"
															type="radio"
															value=""
															name="filter-radio"
															className="size-4 border-gray-300 bg-gray-100 text-brand-400"
														/>

														<div className="ms-4 inline-flex items-center justify-center gap-2">
															<img
																className="size-8 rounded-full border-2 border-white"
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
													htmlFor="patners-filter-radio-2"
													className="w-full cursor-pointer"
												>
													<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
														<input
															id="patners-filter-radio-2"
															type="radio"
															value=""
															name="filter-radio"
															className="size-4 border-gray-300 bg-gray-100 text-brand-400"
														/>

														<div className="ms-4 inline-flex items-center justify-center gap-2">
															<img
																className="size-8 rounded-full border-2 border-white"
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
													htmlFor="patners-filter-radio-3"
													className="w-full cursor-pointer"
												>
													<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
														<input
															id="patners-filter-radio-3"
															type="radio"
															value=""
															name="filter-radio"
															className="size-4 border-gray-300 bg-gray-100 text-brand-400"
														/>

														<div className="ms-4 inline-flex items-center justify-center gap-2">
															<img
																className="size-8 rounded-full border-2 border-white"
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
													htmlFor="patners-filter-radio-4"
													className="w-full cursor-pointer"
												>
													<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
														<input
															id="patners-filter-radio-4"
															type="radio"
															value=""
															name="filter-radio"
															className="size-4 border-gray-300 bg-gray-100 text-brand-400"
														/>

														<div className="ms-4 inline-flex items-center justify-center gap-2">
															<img
																className="size-8 rounded-full border-2 border-white"
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
													htmlFor="patners-filter-radio-5"
													className="w-full cursor-pointer"
												>
													<div className="flex w-full items-center rounded px-3 py-2 hover:bg-brand-100">
														<input
															id="patners-filter-radio-5"
															type="radio"
															value=""
															name="filter-radio"
															className="size-4 border-gray-300 bg-gray-100 text-brand-400"
														/>

														<div className="ms-4 inline-flex items-center justify-center gap-2">
															<img
																className="size-8 rounded-full border-2 border-white"
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
														<span className="ms-4 inline-flex">
															Active
														</span>
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

						<div className="overflow-hidden">
							<div className="relative overflow-x-auto">
								<table
									id="riders-list"
									className="w-full text-left text-sm text-gray-500 rtl:text-right"
								>
									<thead className="bg-gray-50 text-xs uppercase text-gray-500">
										<tr>
											<th scope="col" className="p-4">
												<div className="flex items-center">
													<input
														id="select-all-riders"
														type="checkbox"
														className="focus:ring-brand-300 size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
													/>
													<label
														htmlFor="select-all-riders"
														className="sr-only"
													>
														checkbox
													</label>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Full name</span>
													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Email</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Phone</span>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Gender</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Fleet</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Can lock?</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Wallet</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													Fines
													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Status</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">
													<span className="shrink-0">Date Created</span>

													<a href="#">
														<svg
															className="ms-1.5 size-3"
															aria-hidden="true"
															xmlns="http://www.w3.org/2000/svg"
															fill="currentColor"
															viewBox="0 0 24 24"
														>
															<path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
														</svg>
													</a>
												</div>
											</th>
											<th scope="col" className="px-4 py-3">
												<div className="flex items-center">Action</div>
											</th>
										</tr>
									</thead>
									{/* Table row dynamically generated */}
									<tbody>
										{tableData.map((user, i) => {
											const {
												avatar,
												fullName,
												firstName,
												fines,
												company,
												email,
												phoneNo,
												gender,
												fleet,
												canUnlock,
												walletBalance,
												userStatus,
												createdDate,
											} = user;
											const formattedDate = format(
												createdDate,
												"ee, MMM yyyy p"
											);
											const statusSymbol = cn(
												"me-2",
												"size-2.5",
												"rounded-full",
												{
													"bg-green-500": userStatus === "online",
													"bg-red-500": userStatus === "offline",
												}
											);
											return (
												<tr key={i} className="bg-white hover:bg-gray-50">
													<td className="w-4 p-4">
														<div className="flex items-center">
															<input
																id={`checkbox-riders-table-${i + 1}`}
																type="checkbox"
																className="focus:ring-brand-300 size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2"
															/>
															<label
																htmlFor={`checkbox-riders-table-${i + 1}`}
																className="sr-only"
															>
																checkbox
															</label>
														</div>
													</td>
													<th
														scope="row"
														className="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900"
													>
														<img
															className="size-10 rounded-full"
															src={avatar}
															alt={`${firstName} image`}
														/>
														<div className="ps-3">
															<div className="text-base font-semibold">
																{fullName}
															</div>
															<div className="text-xs font-normal capitalize text-gray-500">
																{company}
															</div>
														</div>
													</th>
													<td className="max-w-sm overflow-hidden truncate p-4 xl:max-w-xs">
														{email}
													</td>
													<td className="max-w-sm overflow-hidden truncate p-4 xl:max-w-xs">
														{phoneNo}
													</td>
													<td className="p-4 capitalize">{gender}</td>
													<td className="p-4">{fleet}</td>
													<td className="p-4">
														<label className="inline-flex cursor-pointer items-center">
															<input
																id="lock-rider"
																type="checkbox"
																value=""
																className="peer sr-only"
															/>
															<div className="peer-focus:ring-brand-300 peer relative h-5 w-9 rounded-full bg-gray-200 after:absolute after:start-[2px] after:top-[2px] after:size-4 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-brand-400 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none peer-focus:ring-4 rtl:peer-checked:after:-translate-x-full"></div>
															<span className="ms-3 text-sm font-medium text-gray-500">
																{canUnlock}
															</span>
														</label>
													</td>
													<td className="p-4">
														<button
															type="button"
															onClick={() => setOpenWalletModal(true)}
															className="rounded border px-4 py-2 font-medium  hover:cursor-pointer hover:bg-cyan-50"
														>
															{walletBalance}
														</button>
													</td>
													<td className="p-4">{fines}</td>
													<td className="p-4">
														<div className="flex items-center capitalize">
															<div className={statusSymbol}></div>
															<span>{userStatus}</span>
														</div>
													</td>
													<td className="max-w-sm overflow-hidden truncate p-4 xl:max-w-xs">
														{formattedDate}
													</td>
													<td className="p-4">
														{/* <!-- Edit rider modal toggle --> */}
														<button
															type="button"
															onClick={() =>
																setOpenEditUserModal(true)
															}
															className="text-gray-500 hover:text-brand-400"
														>
															<svg
																className="size-6"
																aria-hidden="true"
																xmlns="http://www.w3.org/2000/svg"
																fill="none"
																viewBox="0 0 24 24"
															>
																<path
																	stroke="currentColor"
																	strokeLinecap="square"
																	strokeLinejoin="round"
																	strokeWidth="1.5"
																	d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.4 1.6a2 2 0 0 1 0 2.7l-6 6-3.4.7.7-3.4 6-6a2 2 0 0 1 2.7 0Z"
																/>
															</svg>
														</button>
													</td>
												</tr>
											);
										})}
									</tbody>
								</table>
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
					</div>

					{/* <!-- User Wallet Modal toggle --> */}
					<Modal
						show={openWalletModal}
						size="md"
						popup
						dismissible
						onClose={() => setOpenWalletModal(false)}
						initialFocus={walletAmountInputRef}
					>
						<Modal.Header>
							<div className="mb-2 flex-1 overflow-auto p-4 pb-0">
								<h3 className="text-xl font-medium text-gray-900 dark:text-white">
									Wallet
								</h3>
								<p className="text-sm text-gray-500">Add, Remove or Refund money</p>
							</div>
						</Modal.Header>
						<Modal.Body>
							<div className="space-y-4">
								<div>
									<div className="mb-2 block">
										<Label htmlFor="wallet-amount" value="" />
									</div>
									<TextInput
										id="wallet-amount"
										type="number"
										ref={walletAmountInputRef}
										placeholder="Enter amount"
										required
										className="focus:border-brand-400 focus:ring-brand-400"
									/>
								</div>
								<div>
									<p className="flex gap-2 text-lg font-bold">
										<span className="text-gray-700">Current balance</span>
										<span className="text-brand-400">₦3,000</span>
									</p>
								</div>
								<div className="w-full">
									<span className="mb-2.5 block text-xs font-semibold uppercase text-gray-500">
										Action
									</span>
									<div className="flex items-center gap-3">
										<Button className="bg-brand-400">Add</Button>
										<Button className="bg-amber-500">Refund</Button>
										<Button className="bg-red-600">Remove</Button>
									</div>
								</div>
							</div>
						</Modal.Body>
					</Modal>

					{/* <!-- Edit rider modal --> */}
					<Modal
						show={openEditUserModal}
						size="lg"
						popup
						dismissible
						onClose={() => setOpenEditUserModal(false)}
					>
						<Modal.Header>
							<div className="mb-2 flex-1 overflow-auto p-4 pb-0">
								<h3 className="text-xl font-medium text-gray-900 dark:text-white">
									Edit rider
								</h3>
								<p className="text-sm text-gray-500">
									Edit rider profile information
								</p>
							</div>
						</Modal.Header>
						<Modal.Body>
							<form className="space-y-4">
								<div className="grid grid-cols-6 gap-6">
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="first-name"
											value="First Name"
											className="mb-2 block font-medium"
										/>
										<TextInput
											id="first-name"
											name="first-name"
											placeholder="Bonnie"
											required
											className="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
										/>
									</div>
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="last-name"
											value="Last Name"
											className="mb-2 block font-medium"
										/>
										<TextInput
											id="last-name"
											name="last-name"
											placeholder="Green"
											required
											className="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
										/>
									</div>
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="email"
											value="Email"
											className="mb-2 block font-medium"
										/>
										<TextInput
											id="email"
											name="email"
											placeholder="Green"
											required
											className="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
										/>
									</div>
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="phone-number"
											value="Phone Number"
											className="mb-2 block font-medium"
										/>
										<TextInput
											id="phone-number"
											name="phone-number"
											placeholder="e.g. +(234) 000 3456 789"
											required
											className="block w-full rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
										/>
									</div>
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="gender"
											value="Gender"
											className="mb-2 block font-medium"
										/>
										<Select id="gender" required>
											<option>Select</option>
											<option>Male</option>
											<option>Female</option>
										</Select>
									</div>
									<div className="col-span-6 sm:col-span-3">
										<Label
											htmlFor="community"
											value="Community"
											className="mb-2 block font-medium"
										/>
										<Select id="community" required>
											<option value="">Select community</option>
											<option value="Abuja">Abuja</option>
											<option value="Lagos">Lagos</option>
											<option value="Run">Run</option>
											<option value="Bells">Bells</option>
											<option value="Ikoyi">Ikoyi</option>
											<option value="ABU">ABU</option>
											<option value="Futa">Futa</option>
										</Select>
									</div>
								</div>
								<div className="w-full">
									<div className="flex items-center gap-3">
										<Button className="bg-brand-400">Save all</Button>
									</div>
								</div>
							</form>
						</Modal.Body>
					</Modal>
				</div>
			</div>
		</>
	);
}
