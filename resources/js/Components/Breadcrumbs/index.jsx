import React from "react";
import { Link, usePage } from "@inertiajs/react";
import cn from "classnames";

const Breadcrumbs = () => {
	const { location } = usePage().props.ziggy;
	let breadcrumbs = [];
	let urlPath = location;

	// Exclude protocol part if present
	if (urlPath.startsWith("http://")) {
		urlPath = urlPath.slice(7);
	} else if (urlPath.startsWith("https://")) {
		urlPath = urlPath.slice(8);
	}

	const urlParts = urlPath.split("/").filter((part) => part.trim() !== "");
	const slicedUrlParts = urlParts.slice(1); 

	slicedUrlParts.forEach((part) => {
		const url = `/${part}/`;
		const words = part.split("-");
		const capitalizedText = words
			.map((word, index) =>
				index === 0 ? word.charAt(0).toUpperCase() + word.slice(1) : word
			)
			.join(" ");
		breadcrumbs.push({ text: capitalizedText, url: url });
	});

	return (
			<div className={cn("my-5 md:w-auto", location !== route("dashboard") ? "flex" : "hidden")}>

			<nav
				className="flex w-full rounded-lg border border-gray-200 bg-white px-4 py-3 text-gray-700 md:w-auto"
				aria-label="Breadcrumb"
			>
				<ol
					itemScope
					itemType="http://schema.org/BreadcrumbList"
					className="inline-flex items-center gap-1.5 rtl:space-x-reverse"
				>
					<li className="ms-1 inline-flex items-center">
						
						<Link
							href="/"
							className="text-sm font-normal text-gray-400 hover:text-brand-400"
						>
							<svg
								className="me-2.5 size-2.5"
								aria-hidden="true"
								xmlns="http://www.w3.org/2000/svg"
								fill="currentColor"
								viewBox="0 0 20 20"
							>
								<path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
							</svg>
						</Link>
					</li>
					{breadcrumbs.map((breadcrumb, index) => (
						<li
							key={index}
							itemProp="itemListElement"
							itemScope
							itemType="http://schema.org/ListItem"
							className="inline-flex items-center"
						>
							<Link
								itemProp="item"
								href={index === breadcrumbs.length - 1 ? "" : breadcrumb.url}
								className={cn(
									"text-sm",
									index === breadcrumbs.length - 1
										? "pointer-events-none font-medium text-gray-500"
										: "me-2 font-normal text-gray-400 hover:text-brand-400"
								)}
							>
								<span itemProp="name">{breadcrumb.text}</span>
							</Link>
							<meta itemProp="position" content={index + 1} />
							{index < breadcrumbs.length - 1 && (
								<svg
									className="me-1 size-6 text-gray-400"
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
										d="m10 16 4-4-4-4"
									/>
								</svg>
							)}
						</li>
					))}
				</ol>
			</nav>
		</div>
	);
};

export default Breadcrumbs;
