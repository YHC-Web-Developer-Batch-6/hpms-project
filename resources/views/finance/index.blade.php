<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="pb-8">
            <p class="text-3xl font-bold text-black">Laporan Keuangan</p>
            <p class="text-black">Periksa Laporan Keuangan Bulanan Anda !</p>
        </div>
        <div class="flex flex-col gap-3 w-full">

            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                class=" text-black hover:text-white shadow-xl bg-white hover:bg-[#3D889B] focus:ring-4 focus:outline-none focus:ring-[#3D889B] font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center justify-between"
                type="button"><Span class="flex justify-start py-2">Laporan Keuangan Tahun 2023</Span>
                <svg class="w-2.5 h-2.5 flex justify-end" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 4 4 4-4" />
                </svg>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-[78%] dark:bg-gray-700">
                <ul class="py-2 text-sm text-gray-700 dark:text-black" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="{{ url('/finance/show') }}"
                            class="flex justify-between px-4 py-4 hover:bg-[#5fa1b2] font-medium text-sm hover:text-white">
                            <span class="flex justify-start ">Laporan Keuangan Bulan Januari</span><span
                                class="flex justify-end text-[#a6d7e2] items-center">Lihat Laporan
                                <svg width="20" height="20" viewBox="0 0 14 14" fill="none" class="pl-2" \
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.9165 7H11.0832" stroke="#a6d7e2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 2.91675L11.0833 7.00008L7 11.0834" stroke="#a6d7e2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex justify-between px-4 py-4 hover:bg-[#5fa1b2] font-medium text-sm hover:text-white">
                            <span class="flex justify-start ">Laporan Keuangan Bulan Februari</span><span
                                class="flex justify-end text-[#a6d7e2] items-center">Lihat Laporan
                                <svg width="20" height="20" viewBox="0 0 14 14" fill="none" class="pl-2" \
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.9165 7H11.0832" stroke="#a6d7e2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 2.91675L11.0833 7.00008L7 11.0834" stroke="#a6d7e2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex justify-between px-4 py-4 hover:bg-[#5fa1b2] font-medium text-sm hover:text-white">
                            <span class="flex justify-start ">Laporan Keuangan Bulan Maret</span><span
                                class="flex justify-end text-[#a6d7e2] items-center">Lihat Laporan
                                <svg width="20" height="20" viewBox="0 0 14 14" fill="none" class="pl-2" \
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.9165 7H11.0832" stroke="#a6d7e2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 2.91675L11.0833 7.00008L7 11.0834" stroke="#a6d7e2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex justify-between px-4 py-4 hover:bg-[#5fa1b2] font-medium text-sm hover:text-white">
                            <span class="flex justify-start ">Laporan Keuangan Bulan April</span><span
                                class="flex justify-end text-[#a6d7e2] items-center">Lihat Laporan
                                <svg width="20" height="20" viewBox="0 0 14 14" fill="none" class="pl-2" \
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.9165 7H11.0832" stroke="#a6d7e2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M7 2.91675L11.0833 7.00008L7 11.0834" stroke="#a6d7e2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
</x-app-layout>
