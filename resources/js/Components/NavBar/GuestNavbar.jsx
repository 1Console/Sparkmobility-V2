import React from "react";
import { Link } from "@inertiajs/react";
import Logo from "/public/images/TrekkLogo.png";

export default function GuestNavbar() {
	return (
		<header className="absolute z-30 w-full antialiased">
			<nav className="bg-transparent px-4 py-5 lg:px-6">
				<div className="flex flex-col md:flex-row md:items-center md:justify-between">
					<div className="flex items-center justify-start">
						<Link href="/" className="mr-6 flex">
							<img className="ms-3 w-20" src={Logo} alt="Trekk Logo" />
						</Link>
					</div>
				</div>
			</nav>
		</header>
	);
}
