import Alpine from "alpinejs";
import "./flowbite";
import "./bootstrap";
import { format } from "date-fns";
import Breadcrumbs from "./breadcrumbs";
import "./chart";
import "./tables";

window.Alpine = Alpine;
Alpine.start();

// Set current date on navbar
const formattedDate = format(new Date(), "eeee, MMMM do");

document.getElementById("todaysDate").innerText = formattedDate;

if (typeof window !== "undefined" && window.location.pathname.includes("/riders-management/")) {
	// accordionGrp.classList.add("border-l-4", "border-l-brand-400");

	const toggleButton = document.querySelector("#menu-accordion-color-heading-1 button");
	const toggleMenu = document.querySelector("#menu-accordion-color-body-1");

	if (toggleButton.getAttribute("aria-expanded") === "false") {
		toggleButton.setAttribute("aria-expanded", "true");
		// toggleMenu.classList.remove("hidden");
	} else {
		toggleButton.setAttribute("aria-expanded", "false");
		toggleMenu.classList.add("hidden");
	}
	const submenuItems = [
		"/riders-management/active-rides/",
		"/riders-management/all-transactions/",
		"/riders-management/rides-management/",
		"/riders-management/ride-transactions/",
	];

	const currentUrl = window.location.pathname;

	submenuItems.forEach((item) => {
		const menuItem = document.querySelector(`#menu-accordion-color-body-1 a[href='${item}']`);
		if (menuItem && currentUrl === item) {
			menuItem.classList.remove("border-l-transparent");
			menuItem.classList.add("border-l-brand-400");
		}
	});
}

const menuItems = [
	"/dashboard/",
	"/commands/",
	"/fleets-management/",
	"/vehicle-management/",
	"/marketing-campaigns/",
	"/promos/",
	"/pricing-plan-management/",
	"/tickets-management/",
	"/organization/",
];

// Function to highlight the current menu item
function highlightCurrentMenuItem() {
	const currentPathname = typeof window !== "undefined" && window.location.pathname;
	console.log("currentPathname", currentPathname);
	if (currentPathname && menuItems.includes(currentPathname)) {
		const menuItem = document.querySelector(`.side-menu a[href="${currentPathname}"]`);
		if (menuItem) {
			menuItem.classList.add("border-l-4", "border-l-brand-400");
		}
	}
}

document.addEventListener("DOMContentLoaded", function () {
	Breadcrumbs.init();
	highlightCurrentMenuItem();
});

// Toggle arrow icon rotation in Sidebar menu
const accordionGrp = document.querySelector("#menu-accordion-grp-1");
const accordionIcon = document.querySelector("#accordion-icon-rotate");

const handleClick = () => accordionIcon.classList.toggle("rotate-90");
accordionGrp.addEventListener("click", handleClick);
