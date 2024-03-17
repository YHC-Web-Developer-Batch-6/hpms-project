<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class="pl-1 pb-4 pt-2">
            <p class="text-3xl font-bold">Welcome, {{ Auth::user()->name }} </p>
        </div>
        <div class="m-6">
            <div class="flex flex-wrap -mx-6">
                <div class="w-full px-6 sm:w-1/2 xl:w-1/3">
                    <div class="flex items-center px-5 py-6 shadow-2xl rounded-lg bg-slate-100">
                        <div class="p-3 rounded-full bg-indigo-600 bg-opacity-75">
                            <svg width="22" height="22" viewBox="0 0 32 31" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M26.6667 7.74999H5.33333V5.16666H26.6667V7.74999ZM20.92 18.0833H18.6667V20.2662C17.8267 21.4933 17.3333 22.9529 17.3333 24.5417C17.3333 24.9808 17.3867 25.4071 17.4533 25.8333H5.33333V18.0833H4V15.5L5.33333 9.04166H26.6667L28 15.5V17.2437C27.16 16.9596 26.2667 16.7917 25.3333 16.7917C23.6933 16.7917 22.1867 17.2696 20.92 18.0833ZM16 18.0833H8V23.25H16V18.0833ZM28.4533 20.46L23.6667 25.0971L21.5467 23.0433L20 24.5417L23.6667 28.4167L30 22.2812L28.4533 20.46Z"
                                    fill="black" />
                            </svg>

                        </div>

                        <div class="mx-5">
                            <h4 class="text-xl font-semibold text-gray-700">4644</h4>
                            <div class="text-gray-500">Property</div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 sm:mt-0">
                    <div class="flex items-center px-5 py-6 shadow-2xl rounded-lg bg-slate-100">
                        <div class="p-3 rounded-full bg-orange-600 bg-opacity-75">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 11C22 13.9174 20.8411 16.7153 18.7782 18.7782C16.7153 20.8411 13.9174 22 11 22C8.08262 22 5.28473 20.8411 3.22183 18.7782C1.15893 16.7153 0 13.9174 0 11C0 8.08262 1.15893 5.28473 3.22183 3.22183C5.28473 1.15893 8.08262 0 11 0C13.9174 0 16.7153 1.15893 18.7782 3.22183C20.8411 5.28473 22 8.08262 22 11ZM11 2.75C11.2735 2.75 11.5358 2.85865 11.7292 3.05205C11.9226 3.24544 12.0312 3.50775 12.0312 3.78125V4.21575C12.8568 4.35473 13.6365 4.69106 14.3041 5.19612C14.8899 5.64987 15.3271 6.21362 15.576 6.84613C15.6682 7.09876 15.6581 7.37741 15.5478 7.62268C15.4374 7.86795 15.2357 8.06042 14.9855 8.15906C14.7353 8.2577 14.4565 8.25471 14.2085 8.15071C13.9605 8.04672 13.7629 7.84996 13.6579 7.60237C13.5267 7.29353 13.3143 7.026 13.0433 6.82825C12.7404 6.59951 12.3971 6.43015 12.0312 6.32913V10.0375C12.991 10.1654 13.9329 10.4775 14.7249 10.9945C15.807 11.7013 16.4986 12.7408 16.4986 13.9233C16.4986 15.1058 15.8056 16.1453 14.7249 16.852C13.9329 17.3704 12.991 17.6811 12.0299 17.809V18.2201C12.0299 18.4936 11.9212 18.7559 11.7278 18.9493C11.5344 19.1427 11.2721 19.2514 10.9986 19.2514C10.7251 19.2514 10.4628 19.1427 10.2694 18.9493C10.076 18.7559 9.96737 18.4936 9.96737 18.2201V17.8076C9.009 17.6811 8.06712 17.3704 7.27513 16.852C6.61237 16.4189 6.09675 15.8661 5.79287 15.2185C5.67691 14.9707 5.66413 14.687 5.75735 14.4298C5.85056 14.1726 6.04214 13.9629 6.28994 13.8469C6.53773 13.731 6.82145 13.7182 7.07866 13.8114C7.33588 13.9046 7.54553 14.0962 7.6615 14.344C7.7715 14.5819 7.99838 14.861 8.404 15.1264C8.83438 15.4083 9.37475 15.6117 9.96875 15.7204V11.9419C9.14326 11.8028 8.36355 11.4665 7.69588 10.9615C6.7375 10.2204 6.1875 9.18637 6.1875 8.07812C6.1875 6.97125 6.7375 5.93587 7.69588 5.19612C8.36349 4.69106 9.14323 4.35473 9.96875 4.21575V3.78125C9.96875 3.50775 10.0774 3.24544 10.2708 3.05205C10.4642 2.85865 10.7265 2.75 11 2.75Z"
                                    fill="black" />
                            </svg>

                        </div>

                        <div class="mx-5">
                            <h4 class="text-xl font-semibold text-gray-700">Rp. 678.000.000</h4>
                            <div class="text-gray-500">Pembayaran</div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-6 px-6 sm:w-1/2 xl:w-1/3 xl:mt-0">
                    <div class="flex items-center px-5 py-6 shadow-2xl rounded-lg bg-slate-100">
                        <div class="p-3 rounded-full bg-pink-600 bg-opacity-75">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22 11C22 13.9174 20.8411 16.7153 18.7782 18.7782C16.7153 20.8411 13.9174 22 11 22C8.08262 22 5.28473 20.8411 3.22183 18.7782C1.15893 16.7153 0 13.9174 0 11C0 8.08262 1.15893 5.28473 3.22183 3.22183C5.28473 1.15893 8.08262 0 11 0C13.9174 0 16.7153 1.15893 18.7782 3.22183C20.8411 5.28473 22 8.08262 22 11ZM11 2.75C11.2735 2.75 11.5358 2.85865 11.7292 3.05205C11.9226 3.24544 12.0312 3.50775 12.0312 3.78125V4.21575C12.8568 4.35473 13.6365 4.69106 14.3041 5.19612C14.8899 5.64987 15.3271 6.21362 15.576 6.84613C15.6682 7.09876 15.6581 7.37741 15.5478 7.62268C15.4374 7.86795 15.2357 8.06042 14.9855 8.15906C14.7353 8.2577 14.4565 8.25471 14.2085 8.15071C13.9605 8.04672 13.7629 7.84996 13.6579 7.60237C13.5267 7.29353 13.3143 7.026 13.0433 6.82825C12.7404 6.59951 12.3971 6.43015 12.0312 6.32913V10.0375C12.991 10.1654 13.9329 10.4775 14.7249 10.9945C15.807 11.7013 16.4986 12.7408 16.4986 13.9233C16.4986 15.1058 15.8056 16.1453 14.7249 16.852C13.9329 17.3704 12.991 17.6811 12.0299 17.809V18.2201C12.0299 18.4936 11.9212 18.7559 11.7278 18.9493C11.5344 19.1427 11.2721 19.2514 10.9986 19.2514C10.7251 19.2514 10.4628 19.1427 10.2694 18.9493C10.076 18.7559 9.96737 18.4936 9.96737 18.2201V17.8076C9.009 17.6811 8.06712 17.3704 7.27513 16.852C6.61237 16.4189 6.09675 15.8661 5.79287 15.2185C5.67691 14.9707 5.66413 14.687 5.75735 14.4298C5.85056 14.1726 6.04214 13.9629 6.28994 13.8469C6.53773 13.731 6.82145 13.7182 7.07866 13.8114C7.33588 13.9046 7.54553 14.0962 7.6615 14.344C7.7715 14.5819 7.99838 14.861 8.404 15.1264C8.83438 15.4083 9.37475 15.6117 9.96875 15.7204V11.9419C9.14326 11.8028 8.36355 11.4665 7.69588 10.9615C6.7375 10.2204 6.1875 9.18637 6.1875 8.07812C6.1875 6.97125 6.7375 5.93587 7.69588 5.19612C8.36349 4.69106 9.14323 4.35473 9.96875 4.21575V3.78125C9.96875 3.50775 10.0774 3.24544 10.2708 3.05205C10.4642 2.85865 10.7265 2.75 11 2.75Z"
                                    fill="black" />
                            </svg>

                        </div>

                        <div class="mx-5">
                            <h4 class="text-xl font-semibold text-gray-700">Rp. 678.000.000</h4>
                            <div class="text-gray-500">Income</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
