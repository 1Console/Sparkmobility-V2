import React from "react";

export default function PromosOverview() {
	return (
		<div className="mb-8 flex flex-col px-4">
			<div className="relative mb-3 inline-flex items-center">
				<h3 className="text-lg font-semibold text-gray-900">Promos</h3>

				<div
					id="promos-tooltip-info"
					role="tooltip"
					className="tooltip invisible absolute z-10 inline-block max-w-xs rounded-lg bg-gray-700 px-3 py-2 text-xs font-normal text-white opacity-0 shadow-sm transition-opacity duration-300"
				>
					An overview of all active promos.
					<div className="tooltip-arrow" data-popper-arrow></div>
				</div>

				<svg
					data-tooltip-target="promos-tooltip-info"
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

			<div className="flex flex-col items-center justify-between space-y-3">
				<div className="flex min-h-24 w-full flex-col justify-start space-y-1 rounded-sm border border-black bg-gradient-to-r from-cyan-500 to-blue-500 p-4 text-white">
					<span className="text-sm font-medium">Lorer dudut sjhsdfsd</span>
					<p className="text-xs font-extralight">
						Loreur adipisicing elit. At itaque amet delectu dignissimos!
					</p>
					<span className="rounded bg-lime-100 px-3 py-1 text-center text-sm uppercase text-indigo-950">
						trkgh45an
					</span>
				</div>

				<div className="flex min-h-24 w-full flex-col justify-start space-y-1 rounded-sm border border-black bg-gradient-to-r from-violet-500 to-fuchsia-500 p-4 text-white">
					<span className="text-sm font-medium">Lorer dudut sjhsdfsd</span>
					<p className="text-xs font-extralight">
						Loreur adipisicing elit. At itaque amet delectu dignissimos!
					</p>
					<span className="rounded bg-lime-100 px-3 py-1 text-center text-sm uppercase text-indigo-950">
						hga47x
					</span>
				</div>
			</div>

			<div className="my-4 flex justify-end">
				<a
					href="#"
					className="inline-flex items-center rounded px-3 py-2 text-xs font-medium uppercase text-brand-400 hover:bg-brand-100 hover:font-semibold hover:text-brand-400"
				>
					See more
					<svg
						className="ms-1.5 size-5"
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
				</a>
			</div>
		</div>
	);
}
