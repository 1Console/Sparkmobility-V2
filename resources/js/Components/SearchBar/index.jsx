import React from "react";
export default function Searchbar() {
	return (
		<form action="#" method="GET" className="hidden lg:block lg:pl-2">
			<label htmlFor="topbar-search" className="sr-only">
				Search
			</label>
			<div className="relative mt-1 lg:w-96">
				<div className="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
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
					name="email"
					id="topbar-search"
					className="block w-full rounded-full border border-gray-200 bg-gray-50 p-2 pl-9 text-gray-900 focus:border-primary-500 focus:ring-primary-500 sm:text-sm"
					placeholder="Search"
				/>
			</div>
		</form>
	);
}
