// import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import React from "react";
import { Head } from "@inertiajs/react";
import Stats from "@/Components/Stats";
import AdminOverview from "@/Components/AdminOverview";
import PartnersOverview from "@/Components/PartnersOverview";
import PromosOverview from "@/Components/PromosOverview";
import ReviewsOverview from "@/Components/ReviewsOverview";
import TicketsOverview from "@/Components/TicketsOverview";

export default function Dashboard() {
	// export default function Dashboard({ auth }) {
	return (
		// <AuthenticatedLayout
		// 	user={auth.user}
		// 	header={
		// 		<h2 className="text-xl font-semibold leading-tight text-gray-800">Dashboard</h2>
		// 	}
		// >
		<>
			<Head title="Dashboard" />

			<div className="flex h-auto flex-col lg:h-full lg:flex-1 lg:flex-row">
				<section className="flex w-full px-4 md:overflow-y-auto md:px-8">
					<div className="flex w-full flex-1 flex-col">
						<div className="mb-6 mt-10 space-y-1.5 md:mt-6">
							<h1 className="text-xl font-medium text-gray-800">Overview</h1>
							<p>Dashboard overview of all major operations</p>
						</div>

						<Stats />
						<AdminOverview />
						<ReviewsOverview />
					</div>
				</section>
				<aside
					className="hidden h-auto w-full shrink-0 flex-col border-l border-gray-200 bg-white shadow duration-75 md:flex lg:ml-8 lg:w-80 lg:overflow-y-auto"
					aria-label="Sidebar"
				>
					<div className="mt-5 flex h-full flex-1 flex-col px-4">
						<PartnersOverview />
						<PromosOverview />
						<TicketsOverview />
					</div>
				</aside>
			</div>
		</>
		// </AuthenticatedLayout >
	);
}
