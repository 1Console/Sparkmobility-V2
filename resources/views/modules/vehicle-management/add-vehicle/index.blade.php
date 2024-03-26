@extends("layouts.authenticated_layout")

@section("content")
<div class="rounded-lg border border-gray-200 bg-white p-4">
  <div class="mt-4 space-y-1 px-4">
    <h3 class="text-3xl font-semibold text-gray-700">Vehicles management</h3>
    <p class="text-sm text-gray-500">Manage all vehicles here</p>
  </div>

  <div
    id="addVehicle"
    tabindex="0"
    class=" left-0 h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden p-4 md:inset-0"
  >
    <div class="relative max-h-full w-full max-w-2xl">
      <!-- vehicle form content -->
      <form class="relative rounded-lg bg-white shadow">
        <!-- vehicle form header -->
        <div
          class="relative flex items-start justify-between rounded-t border-b p-4"
        >
          <div class="flex flex-col">
            <h3 class="text-xl font-semibold text-gray-900">Add Vehicles</h3>
            <p class="text-sm text-gray-500">
              Fill in the form below to add vehicle to fleet
            </p>
          </div>
        </div>
        <!-- vehicle form body -->
        <div class="space-y-6 p-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="vehicle-name" class="mb-2 block font-medium">
                Vehicle Name
              </label>
              <input
                type="text"
                name="vehicle-name"
                id="vehicle-name"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
                placeholder="Enter name"
                required=""
              />
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="location" class="mb-2 block font-medium">
                location
              </label>
              <input
                type="text"
                name="location"
                id="location"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
                placeholder="Enter Location"
                required=""
              />
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="assign-fleet" class="mb-2 block font-medium">
                Assign To Fleet
              </label>
              <select
                name="assign-fleet"
                id="assign-fleet"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
                required=""
              >
                <option value="">Select Fleet</option>
                <option value="Abuja">Abuja</option>
                <option value="Lagos">Lagos</option>
                <option value="Run">Run</option>
                <option value="Bells">Bells</option>
                <option value="Ikoyi">Ikoyi</option>
                <option value="ABU">ABU</option>
                <option value="Futa">Futa</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="mac-address" class="mb-2 block font-medium">
                MAC Address
              </label>
              <input
                type="text"
                name="mac-address"
                id="mac-address"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
                placeholder="Enter MAC"
                required=""
              />
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="imei" class="mb-2 block font-medium">
                IMEI Number
              </label>
              <input
                type="number"
                name="imei"
                id="imei"
                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 shadow-sm focus:border-brand-400 focus:ring-brand-400"
                placeholder="Enter IMEI"
                required=""
              />
            </div>
          </div>  
          <!-- vehicle form footer -->
          <div
            class="flex items-center space-x-3 rounded-b border-t border-gray-200 p-6 rtl:space-x-reverse"
          >
            <button
              type="submit"
              class="w-full rounded-lg bg-brand-400 px-5 py-2.5 text-center text-sm font-medium text-black hover:bg-brand-400 focus:outline-none focus:ring-4 focus:ring-brand-100"
            >
              Add Vehicle
            </button>
          </div>
        </div>  
      </form>
    </div>
  </div>  

  <div class="relative mt-4 flex w-auto items-end px-4 py-5">
    <div class="flex">
      <div class="mr-5 shrink-0">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="size-10 text-brand-400"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3 12H9L12 5L14 18.5L17.5 12H21.5"
          />
        </svg>
      </div>
      <div>
        <div class="text-xl font-medium text-gray-600">Vehicle History</div>
        <p class="text-sm text-zinc-500">See all added vehicles</p>
      </div>
    </div>
  </div>	
    

  <hr class="my-4" />

  {{-- Table --}}

  <div class="flex flex-col rounded bg-white px-2">
    <div
      class="flex-column flex flex-col items-start space-y-2 pb-4 md:flex-row md:items-center md:justify-between md:space-y-0"
    >
      <div
        class="flex-column flex items-center justify-between gap-2 md:flex-row md:items-center"
      >
        <span>
          <svg
            class="size-5 text-gray-600"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
          >
            <path
              stroke="currentColor"
              stroke-linecap="round"
              stroke-width="1.5"
              d="M18.8 4H5.2a1 1 0 0 0-.7 1.7l5.3 6 .2.7v4.8c0 .2 0 .4.2.4l3 2.3c.3.2.8 0 .8-.4v-7.1c0-.3 0-.5.2-.7l5.3-6a1 1 0 0 0-.7-1.7Z"
            />
          </svg>
        </span>
      </div>	
    </div>		
    <div class="overflow-hidden shadow">
      <div class="w-1/2 relative overflow-x-auto">
        <table
          id="fleet-list"
          class="w-full text-left text-sm text-gray-500 rtl:text-right"
        >
          <thead class="bg-gray-50 text-xs uppercase text-gray-500">
            <tr>
              <th scope="col" class="px-4 py-3">
                <div class="flex items-center">
                  <span class="shrink-0">Admin</span>
                  
                </div>
              </th>
              <th scope="col" class="px-4 py-3">
                <div class="flex items-center">
                  <span class="shrink-0">Vehicle added</span>

                </div>
              </th>
              <th scope="col" class="px-4 py-3">
                <div class="flex items-center">
                  <span class="shrink-0">Status</span>
                </div>
              </th>
              <th scope="col" class="px-4 py-3">
                <div class="flex items-center">
                  <span class="shrink-0">Date</span>

                  <a href="#">
                    <svg
                      class="ms-1.5 size-3"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="currentColor"
                      viewBox="0 0 24 24"
                    >
                      <path
                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"
                      />
                    </svg>
                  </a>
                </div>
              </th>
            </tr>
          </thead>
          <tbody>
            <!-- Table row dynamically generated -->
          </tbody>
        </table>
      </div>
      <div 
        id="vMChart"
        class="w-1/2"
      >
      </div>
    </div>
  </div>
</div>
@endsection
