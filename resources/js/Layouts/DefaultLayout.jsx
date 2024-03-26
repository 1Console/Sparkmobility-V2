import GuestNavbar from "@/Components/NavBar/GuestNavbar";

export default function Layout({ children }) {
	return (
		<div className="flex flex-col">
			<GuestNavbar />
			<div className="relative flex md:h-screen">
				<main className="mx-auto w-full md:flex-1">
					{children}
					<footer class="py-16 text-center text-sm text-black dark:text-white/70">
						Powered by Trekk
					</footer>
				</main>
			</div>
		</div>
	);
}
