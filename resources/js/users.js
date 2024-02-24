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
	const createdDate = faker.date.recent();
	const userStatus = faker.helpers.arrayElement(["online", "offline"]);

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
	};
}

// Example usage to generate a random user
const randomUser = generateRandomUser();
// console.log(randomUser);

// Function to populate table rows with random user data
function populateTableRows(numRows) {
	const tableBody = document.querySelector("#riders-list tbody");
	tableBody.innerHTML = ""; // Clear existing rows
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
										id="checkbox-table-search-${i + 1}"
										type="checkbox"
										class="size-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500"
									/>
									<label for="checkbox-table-search-${i + 1}" class="sr-only">
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
									<div class="capitalize font-normal text-gray-500">${company}</div>
								</div>
							</th>
							<td class="p-4">${email}</td>
							<td class="p-4">${phoneNo}</td>
							<td class="p-4">${gender}</td>
							<td class="p-4">${fleet}</td>
							<td class="flex items-center capitalize p-4">
                            <label class="inline-flex items-center mb-5 cursor-pointer">
                            <input type="checkbox" value="" class="sr-only peer">
                            <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-300 rounded-full peer peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-brand-400"></div>
                            <span class="ms-3 text-sm font-medium text-gray-500">${canUnlock}</span>
                            </label>
                            </td>
							<td class="p-4">N${walletBalance}</td>
							<td class="p-4">N${fines}</td>
							<td class="p-4">
								<div class="capitalize flex items-center">
									<div class="${statusSymbol}"></div>
                                    ${userStatus}
								</div>
							</td>
							<td class="p-4">${formattedDate}</td>
                            <td class="p-4">
								<!-- Modal toggle -->
								<a
									href="#"
									type="button"
									data-modal-target="editUserModal"
									data-modal-show="editUserModal"
									class="font-medium text-blue-600 hover:underline"
								>
									Edit user
								</a>
							</td>
						</tr>
        `;
		tableBody.insertAdjacentHTML("beforeend", row);
	}
}

// Call the populateTableRows function with the desired number of rows
populateTableRows(5); // Change 10 to the desired number of rows

// {
//     "firstName": "Amos",
//         "lastName": "Jast",
//             "avatar": "https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/16.jpg",
//                 "email": "Amos_Jast73@hotmail.com",
//                     "city": "Pearl City",
//                         "walletBalance": "341.92",
//                             "sex": "male",
//                                 "gender": "female"
// }

// async function fetchDataAndUse() {
//     try {
//         const response = await fetch('https://randomuser.me/api/?results=8');
//         if (!response.ok) {
//             throw new Error('Network response was not ok');
//         }
//         const data = await response.json();
//         console.log(data); // This will log the fetched data to the console

//         // Return the fetched data
//         return data.results ? data.results : [];
//     } catch (error) {
//         console.error('There was a problem fetching and using data:', error);
//         return []; // Return an empty array if there's an error
//     }
// }

// // Call the function and use the result
// fetchDataAndUse()
//     .then((users) => {
//         if (users.length > 0) {
//             // Do something with the fetched data
//             console.log("Query result", users);
//         } else {
//             console.log('No users found');
//         }
//     })
//     .catch((error) => {
//         console.error('Error occurred while fetching and using data:', error);
//     });
