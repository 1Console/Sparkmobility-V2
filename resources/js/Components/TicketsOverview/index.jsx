import React from "react";

export default function TicketsOverview() {
	return (
		<div className="h-auto pb-4 md:mb-10 md:pb-14">
			<div className="relative mb-3 flex items-start">
				<span className="absolute right-1 top-1 rounded-full bg-brand-100 px-2 py-0.5 text-xxs font-medium tracking-wide text-brand-400">
					5 recent
				</span>
				<div className="mr-3 shrink-0">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						strokeWidth="1.5"
						stroke="currentColor"
						className="size-9 text-brand-400"
					>
						<path
							strokeLinecap="round"
							strokeLinejoin="round"
							d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"
						/>
					</svg>
				</div>
				<div>
					<div className="text-lg font-semibold text-gray-900">Tickets</div>
					<p className="text-xs text-zinc-500">Attend to requested support</p>
				</div>
			</div>

			<div className="space-y-3 divide-y divide-blue-200">
				<div className="relative flex items-start pt-4">
					<div className="relative mr-5 shrink-0">
						<span className="absolute right-0 inline-block size-2 rounded-full bg-emerald-500"></span>
						<img
							className="size-8 rounded-full"
							src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
							alt="user photo"
						/>
					</div>
					<div className="w-full">
						<p className="text-xs font-semibold text-black">Paul Simeon</p>
						<p className="text-xs text-zinc-500">
							Please can you checkout what could be the problem...
							<span>
								<a href="#" className="text-brand-400">
									see more
								</a>
							</span>
						</p>

						<form className="my-2 flex-none items-center">
							<label htmlFor="ticket-chatbox" className="sr-only">
								Chat with support
							</label>
							<div className="relative w-full">
								<div className="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										fill="none"
										viewBox="0 0 24 24"
										strokeWidth="1.5"
										stroke="currentColor"
										className="size-4 -rotate-45 text-zinc-400"
									>
										<path
											strokeLinecap="round"
											strokeLinejoin="round"
											d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5"
										/>
									</svg>
								</div>
								<input
									type="text"
									id="ticket-chatbox"
									className="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-xs text-zinc-400 focus:border-primary-500 focus:ring-primary-500"
									placeholder="Reply message"
								/>
							</div>
						</form>
					</div>
				</div>

				<div className="relative flex items-start pt-4">
					<div className="relative mr-5 shrink-0">
						<span className="absolute right-0 inline-block size-2 rounded-full bg-amber-500"></span>
						<img
							className="size-8 rounded-full"
							src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
							alt="user photo"
						/>
					</div>
					<div className="w-full">
						<p className="text-xs font-semibold text-black">Paul Simeon</p>
						<p className="text-xs text-zinc-500">
							Please can you checkout what could be the problem...
							<span>
								<a href="#" className="text-brand-400">
									see more
								</a>
							</span>
						</p>
					</div>
				</div>

				<div className="relative flex items-start pt-4">
					<div className="relative mr-5 shrink-0">
						<span className="absolute right-0 inline-block size-2 rounded-full bg-emerald-500"></span>
						<img
							className="size-8 rounded-full"
							src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
							alt="user photo"
						/>
					</div>
					<div className="w-full">
						<p className="text-xs font-semibold text-black">Paul Simeon</p>
						<p className="text-xs text-zinc-500">
							Please can you checkout what could be the problem...
							<span>
								<a href="#" className="text-brand-400">
									see more
								</a>
							</span>
						</p>
					</div>
				</div>

				<div className="relative flex items-start pt-4">
					<div className="relative mr-5 shrink-0">
						<span className="absolute right-0 inline-block size-2 rounded-full bg-red-600"></span>
						<img
							className="size-8 rounded-full"
							src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
							alt="user photo"
						/>
					</div>
					<div className="w-full">
						<p className="text-xs font-semibold text-black">Paul Simeon</p>
						<p className="text-xs text-zinc-500">
							Please can you checkout what could be the problem...
							<span>
								<a href="#" className="text-brand-400">
									see more
								</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	);
}
