// import { Collapse } from "flowbite";

// const $mainSidebar = document.getElementById("Sidebar");
// const $sidebarTrigger = document.getElementById("toggleSidebar");

// const sidebarOptions = {
// 	onCollapse: () => {
// 		console.log("element has been collapsed");
// 	},
// 	onExpand: () => {
// 		console.log("element has been expanded");
// 	},
// 	onToggle: () => {
// 		console.log("element has been toggled");
// 	},
// };

// const instanceOptions = {
// 	id: "mainSidebar",
// 	override: true,
// };

// const collapseSidebar = new Collapse(
// 	$mainSidebar,
// 	$sidebarTrigger,
// 	sidebarOptions,
// 	instanceOptions
// );

// // Function to toggle collapse based on screen width
// function toggleCollapseOnWidth() {
// 	if (window.innerWidth < 992) {
// 		collapseSidebar.collapse();
// 	} else {
// 		collapseSidebar.expand();
// 	}
// }

// // Call toggleCollapseOnWidth() immediately after defining it
// toggleCollapseOnWidth();

// // Add event listener for window resize
// window.addEventListener("resize", toggleCollapseOnWidth);

// // Emit event assuming there's a parent element with ID "main-container"
// const $sidebarContainer = document.getElementById("main-container");

// $sidebarContainer.addEventListener("click", (event) => {
// 	const clickedElement = event.target;
// 	if (clickedElement === $sidebarTrigger) {
// 		collapseSidebar.toggle();
// 	}
// });
