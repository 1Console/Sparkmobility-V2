import { faker } from "@faker-js/faker";
import cn from "classnames";
import { format } from "date-fns";

// Function to generate random user data
function generateRandomUser() {
	const gender = faker.person.sexType();
	const firstName = faker.person.firstName(gender);
	const lastName = faker.person.lastName();
	const email = faker.internet.email({ firstName, lastName });
	const phoneNo = faker.phone.number();
	const company = faker.company.buzzVerb();
	const fleet = faker.location.city();
	const walletBalance = faker.finance.amount();
	const fines = faker.finance.amount();
	const avatar = faker.image.avatar();
	const canUnlock = faker.datatype.boolean();
	const isActive = faker.datatype.boolean();
	const createdDate = faker.date.past();
	const userStatus = faker.helpers.arrayElement(["online", "offline"]);
	const transactionType = faker.helpers.arrayElement(["Credit", "Debit"]);
	const transactionMethod = faker.helpers.arrayElement([
		"Card",
		"Coupon",
		"Trekk Admin",
		"Wallet",
	]);
	const transactionAmount = faker.finance.amount();
	const transactionStatus = faker.helpers.arrayElement(["successful", "failed"]);

	return {
		firstName,
		lastName,
		fullName: `${firstName} ${lastName}`,
		avatar,
		company,
		fleet,
		email,
		walletBalance,
		fines,
		gender,
		phoneNo,
		isActive,
		createdDate,
		canUnlock,
		userStatus,
		transactionMethod,
		transactionType,
		transactionAmount,
		transactionStatus,
	};
}

// Example usage to generate a random user
const randomUser = generateRandomUser();
// console.log(randomUser);

document.addEventListener("DOMContentLoaded", function () {
	// Function to populate table rows with random user data
	function populateTableRows(numRows) {
		const tableBody = document.querySelector("#riders-list tbody");

		// if (tableBody) {
		//     // If the element exists, proceed with your logic here
		//     tableBody.innerHTML = ""; // Clear existing rows
		//     // Rest of your code goes here...
		// } else {
		//     // If the element doesn't exist, log an error or handle it accordingly
		//     console.error("#riders-list tbody not found");
		// }

		if (!tableBody) {
			console.error("#riders-list tbody not found");
			return; // Exit the function if table body is not found
		}

		// Clear existing rows
		//   tableBody.innerHTML = "";

		for (let i = 0; i < numRows; i++) {
			const user = generateRandomUser();
			const {
				firstName,
				fullName,
				avatar,
				company,
				fleet,
				email,
				walletBalance,
				fines,
				gender,
				phoneNo,
				isActive,
				createdDate,
				canUnlock,
				userStatus,
			} = user;

			console.log("isActive", isActive);
			const formattedDate = format(createdDate, "ee, MMM yyyy p");

			const statusSymbol = cn("me-2", "size-2.5", "rounded-full", {
				"bg-green-500": userStatus === "online",
				"bg-red-500": userStatus === "offline",
			});

			const row = `
            <tr class="bg-white hover:bg-gray-50">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input
                            id="checkbox-riders-table-${i + 1}"
                            type="checkbox"
                            class="select-rider size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2 focus:ring-brand-300"
                        />
                        <label for="checkbox-riders-table-${i + 1}" class="sr-only">
                            checkbox
                        </label>
                    </div>
                </td>
                <th
                    scope="row"
                    class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900"
                >
                    <img
                        class="size-10 rounded-full"
                        src="${avatar}"
                        alt="${firstName} image"
                    />
                    <div class="ps-3">
                        <div class="text-base font-semibold">${fullName}</div>
                        <div class="text-xs capitalize font-normal text-gray-500">${company}</div>
                    </div>
                </th>
                <td class="p-4 max-w-sm overflow-hidden truncate xl:max-w-xs">${email}</td>
                <td class="p-4 max-w-sm overflow-hidden truncate xl:max-w-xs">${phoneNo}</td>
                <td class="p-4 capitalize">${gender}</td>
                <td class="p-4">${fleet}</td>
                <td class="p-4">
                    <label class="inline-flex items-center cursor-pointer">
                        <input id="lock-rider" type="checkbox" value="" class="sr-only peer">
                        <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-brand-400"></div>
                        <span class="ms-3 text-sm font-medium text-gray-500">${canUnlock}</span>
                    </label>
                </td>
                <td class="p-4">
					<button
                        type="button"
                        data-modal-target="editUserWalletModal"
						data-modal-show="editUserWalletModal"
                        class="font-medium px-4 py-2 rounded hover:cursor-text hover:bg-cyan-50"
                    >
                        N${walletBalance}
                    </button>
				</td>
                <td class="p-4"> 
                        N${fines}
					</td>
                <td class="p-4">
                    <div class="capitalize flex items-center">
                        <div class="${statusSymbol}"></div>
                        ${userStatus}
                    </div>
                </td>
                <td class="p-4 max-w-sm overflow-hidden truncate xl:max-w-xs">${formattedDate}</td>
                <td class="p-4">
                    <!-- Modal toggle -->
                    <a
                        href="#"
                        type="button"
                        data-modal-target="editUserModal"
                        data-modal-show="editUserModal"
                        class="text-gray-500 hover:text-brand-400"
                    >
						<svg class="size-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
		<path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="1.5" d="M7 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h1m4-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm7.4 1.6a2 2 0 0 1 0 2.7l-6 6-3.4.7.7-3.4 6-6a2 2 0 0 1 2.7 0Z"/>
	</svg>
                    </a>

                </td>
            </tr>
            `;
			tableBody.insertAdjacentHTML("beforeend", row);
		}
	}

	// Call the populateTableRows function with the desired number of rows
	populateTableRows(7);

	// Check all boxes in the table
	const checkboxAllRiders = document.querySelector("#checkbox-all-riders");

	checkboxAllRiders.addEventListener("change", function () {
		const checkboxes = document.querySelectorAll(
			"#riders-list tbody input[type='checkbox'].select-rider",
		);
		checkboxes.forEach(function (checkbox) {
			checkbox.checked = checkboxAllRiders.checked;
		});
	});

	// Function to populate table rows with random user transaction data
	function populateTransactionTableRows(numRows) {
		const tableBody = document.querySelector("#riders-transaction-list tbody");
		if (!tableBody) {
			console.error("#riders-list tbody not found");
			return; // Exit the function if table body is not found
		}
		for (let i = 0; i < numRows; i++) {
			const user = generateRandomUser();
			const {
				firstName,
				fullName,
				avatar,
				company,
				fleet,
				email,
				walletBalance,
				fines,
				isActive,
				createdDate,
				canUnlock,
				userStatus,
				transactionType,
				transactionMethod,
				transactionAmount,
				transactionStatus,
			} = user;

			console.log("isActive", isActive);
			const formattedDate = format(createdDate, "ee, MMM yyyy p");

			const statusSymbol = cn("me-2", "size-2.5", "rounded-full", {
				"bg-green-500": userStatus === "online",
				"bg-red-500": userStatus === "offline",
			});

			const transactionStatusSymbol = cn("me-2", "size-2.5", "rounded-full", {
				"bg-green-500": transactionStatus === "successful",
				"bg-red-500": transactionStatus === "failed",
			});

			const row = `
            <tr class="bg-white hover:bg-gray-50">
                <td class="w-4 p-4">
                    <div class="flex items-center">
                        <input
                            id="checkbox-riders-table-${i + 1}"
                            type="checkbox"
                            class="select-rider size-4 rounded border-gray-300 bg-gray-100 text-brand-400 focus:ring-2 focus:ring-brand-300"
                        />
                        <label for="checkbox-riders-table-${i + 1}" class="sr-only">
                            checkbox
                        </label>
                    </div>
                </td>
                <th
                    scope="row"
                    class="flex items-center whitespace-nowrap px-6 py-4 font-medium text-gray-900"
                >
                    <img
                        class="size-10 rounded-full"
                        src="${avatar}"
                        alt="${firstName} image"
                    />
                    <div class="ps-3">
                        <div class="text-base font-semibold">${fullName}</div>
                        <div class="text-xs capitalize font-normal text-gray-500">${company}</div>
                    </div>
                </th>
                <td class="p-4 max-w-sm overflow-hidden truncate xl:max-w-xs">${email}</td>
				 <td class="p-4 max-w-sm overflow-hidden truncate xl:max-w-xs">${formattedDate}</td>
                <td class="p-4 capitalize">${transactionType}</td>
                <td class="p-4">${transactionMethod}</td>
                
                <td class="p-4"> 
                        N${transactionAmount}
					</td>
                <td class="p-4">
                    <div class="capitalize flex items-center">
                        <div class="${transactionStatusSymbol}"></div>
                        ${transactionStatus}
                    </div>
                </td>
            </tr>
            `;
			tableBody.insertAdjacentHTML("beforeend", row);
		}
	}
	populateTransactionTableRows(7);
});
