import React from "react";

export default function PartnersOverview() {
	return (
		<div className="mb-10 flex flex-col pl-4 pt-2">
			<div className="relative mb-3 inline-flex items-center">
				<h3 className="text-lg font-semibold text-gray-900">Partners</h3>

				<div
					id="partners-tooltip-info"
					role="tooltip"
					className="tooltip invisible absolute z-10 inline-block max-w-xs rounded-lg bg-gray-700 px-3 py-2 text-xs font-normal text-white opacity-0 shadow-sm transition-opacity duration-300"
				>
					See and manage all Partners on here. This is only visible to you the Super admin
					<div className="tooltip-arrow" data-popper-arrow></div>
				</div>

				<svg
					data-tooltip-target="partners-tooltip-info"
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					strokeWidth="1.5"
					stroke="currentColor"
					className="ml-1.5 size-4 text-brand-400"
				>
					<path
						strokeLinecap="round"
						strokeLinejoin="round"
						d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"
					/>
				</svg>
			</div>

			<div className="flex flex-wrap items-end gap-2 text-white rtl:space-x-reverse">
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-red-400">
					<span className="font-medium">AX</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-sky-500">
					<span className="font-medium">KZ</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-red-800">
					<span className="font-medium">OS</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-purple-800">
					<span className="font-medium">CC</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-slate-800">
					<span className="font-medium">OL</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-amber-700">
					<span className="font-medium">PC</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-lime-600">
					<span className="font-medium">JL</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-indigo-900">
					<span className="font-medium">OE</span>
				</div>
				<div className="border-1 relative inline-flex size-9 items-center justify-center overflow-hidden rounded-full bg-blue-900">
					<span className="font-medium">DA</span>
				</div>

				<button
					type="button"
					href="#"
					className="mx-auto ml-2 inline-flex items-center justify-between rounded px-3 py-1.5 text-center text-xs font-normal text-brand-400 hover:bg-brand-100"
				>
					See more
					<svg
						className="size-5"
						aria-hidden="true"
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
					>
						<path
							stroke="currentColor"
							strokeLinecap="round"
							strokeLinejoin="round"
							strokeWidth="1.5"
							d="m9 16 4-4-4-4"
						/>
					</svg>
				</button>
			</div>
		</div>
	);
}
