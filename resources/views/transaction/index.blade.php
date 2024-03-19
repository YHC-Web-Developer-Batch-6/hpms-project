<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class="pl-1 pb-8">
            <p class="text-3xl font-bold">Transactions</p>
            <p class="">Periksa Kembali Transaksi Anda!</p>
        </div>
        <div class="flex flex-col gap-6">
            <div class="flex justify-between">
                <div class="flex justify-end">
                    <div class="relative mt-1">
                        <div
                            class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="text" id="table-search"
                            class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-white focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Cari transaksi">
                    </div>
                </div>
                <div class="flex justify-start items-center">
                    <p class="text-sm font-normal text-gray-900 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                        Menampilkan
                    </p>
                    <form class="ml-3 form-horizontal items-center">
                        <div class="form-group items-center">
                            <select name="entries" class="items-center border-gray-300 rounded-md text-black">
                                <option selected value="5">5</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                        </div>
                    </form>
                    <p class="ml-3 text-sm font-normal text-gray-900">
                        Entri per halaman
                    </p>
                </div>
            </div>
            <div class="relative overflow-x-auto">
                <table class="h-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-800">
                    <thead class="">
                        <tr class="bg-[#28808C] text-white text-nowrap">
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Kode thansaksi</th>
                            <th class="px-6 py-3">Properti</th>
                            <th class="px-6 py-3">Pelanggan</th>
                            <th class="px-6 py-3">Total Pembayaran</th>
                            <th class="px-6 py-3">Pembayaran</th>
                            <th class="px-6 py-3">Sisa Tagihan</th>
                            <th class="px-6 py-3">Tipe</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $transaction)
                            <tr class="text-nowrap bg-white">
                                <td class="px-6 py-4">
                                    {{ $transaction->created_at->format('j M Y, g:i a') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->code }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->property->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ 'Rp' . number_format($transaction->total, 0, '.', '.') }}
                                </td>

                                <td class="px-6 py-4">
                                    {{ 'Rp' . number_format($transaction->total, 0, '.', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ 'Rp' . number_format($transaction->total, 0, '.', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->type }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    @if ($transaction->status === 'paid')
                                        <i class="fa-solid fa-circle-check text-green-600"></i>
                                    @else
                                        <i class="fa-duotone fa-money-bill-wave"></i>
                                    @endif
                                </td>
                                <td class="flex text-center px-6 py-4">
                                    <div x-data="{ isOpen: false }">
                                        <a href="#" @click="isOpen = true"
                                            class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">Detail</a>
                                        <div x-show="isOpen" @click.away="isOpen = false"
                                            class="fixed z-10 inset-0 overflow-y-auto">
                                            <div
                                                class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                                </div>

                                                <!-- Isi Pop-up -->
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                    aria-hidden="true">&#8203;</span>
                                                <div x-show="isOpen"
                                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                                                    <div
                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex border-b border-[#28808C]">
                                                        <p class="text-2xl font-bold px-4 py-2">Detail</p>
                                                    </div>
                                                    <div class="bg-gray-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                        <!-- Konten Pop-up -->
                                                        <div class="sm:flex sm:items-start">
                                                            <div class="text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                <div class="max-w-xs w-full sm:mx-0 sm:w-auto mb-4">
                                                                    <div
                                                                        class="bg-white overflow-hidden shadow-lg rounded-lg">
                                                                        <div class="flex p-4 items-center">
                                                                            <div class="justify-start">
                                                                                <div
                                                                                    class="rounded-full bg-black w-16 h-16 items-center">
                                                                                </div>
                                                                            </div>
                                                                            <div class="text-left justify-end ml-8">
                                                                                <div class="flex items-center mb-2">
                                                                                    <svg width="20" height="20"
                                                                                        viewBox="0 0 20 20"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M13.8054 5.75088C13.8054 3.54611 12.0181 1.75879 9.81328 1.75879C7.60851 1.75879 5.82119 3.54611 5.82119 5.75088C5.82119 7.95565 7.60851 9.74297 9.81328 9.74297H9.01486C5.04628 9.74297 1.8291 12.9601 1.8291 16.9287C1.8291 17.3697 2.18657 17.7272 2.62752 17.7272H16.999C17.44 17.7272 17.7975 17.3697 17.7975 16.9287C17.7975 12.9601 14.5803 9.74297 10.6117 9.74297H9.81328C10.8721 9.74297 11.8875 9.32238 12.6361 8.57371C13.3848 7.82505 13.8054 6.80965 13.8054 5.75088ZM9.01486 11.3398C6.23607 11.3391 3.8788 13.38 3.48183 16.1303H16.1447C15.7478 13.38 13.3905 11.3391 10.6117 11.3398H9.01486ZM7.41803 5.75088C7.41803 7.07374 8.49042 8.14613 9.81328 8.14613C10.4485 8.14613 11.0578 7.89378 11.507 7.44458C11.9562 6.99538 12.2085 6.38614 12.2085 5.75088C12.2085 4.42802 11.1361 3.35563 9.81328 3.35563C8.49042 3.35563 7.41803 4.42802 7.41803 5.75088Z"
                                                                                            fill="#231F20" />
                                                                                    </svg>

                                                                                    <p class="text-sm font-normal ml-4">
                                                                                        Nama
                                                                                        Pengguna</p>
                                                                                </div>
                                                                                <div class="flex items-center mb-2">
                                                                                    <svg width="20" height="20"
                                                                                        viewBox="0 0 20 20"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path fill-rule="evenodd"
                                                                                            clip-rule="evenodd"
                                                                                            d="M17.3903 4.8752C16.9441 4.21512 16.1989 3.82009 15.4022 3.82129H4.22436C2.90149 3.82129 1.8291 4.89368 1.8291 6.21655V14.2007C1.8291 15.5236 2.90149 16.596 4.22436 16.596H15.4022C16.7251 16.596 17.7975 15.5236 17.7975 14.2007V6.21655C17.7985 5.73883 17.6567 5.27171 17.3903 4.8752ZM4.22436 5.41812H15.4022C15.6315 5.41841 15.8497 5.5173 16.001 5.68959L9.81328 9.30642L3.63353 5.6816C3.78447 5.51435 3.99906 5.41866 4.22436 5.41812ZM15.4022 14.9991C15.8432 14.9991 16.2006 14.6417 16.2006 14.2007V7.40618L10.6117 10.6797C10.3691 10.8204 10.0937 10.8948 9.81328 10.8953C9.53356 10.8972 9.25823 10.8256 9.01486 10.6877L3.42594 7.40618V14.2007C3.42594 14.6417 3.7834 14.9991 4.22436 14.9991H15.4022Z"
                                                                                            fill="#231F20" />
                                                                                    </svg>


                                                                                    <p
                                                                                        class="text-sm font-normal ml-4">
                                                                                        Email Pengguna</p>
                                                                                </div>
                                                                                <div class="flex items-center">
                                                                                    <svg width="20" height="20"
                                                                                        viewBox="0 0 17 17"
                                                                                        fill="none"
                                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                                        <path
                                                                                            d="M8.13249 1.39282C4.45777 1.39282 1.479 4.37172 1.479 8.04631C1.479 9.00042 1.69191 9.95067 2.10309 10.8325C1.55751 13.6502 1.49963 13.9097 1.49963 13.9097C1.41048 14.3712 1.80701 14.7664 2.26943 14.679C2.26943 14.679 2.5216 14.6354 5.3673 14.0969C6.22626 14.5051 7.17838 14.6998 8.13249 14.6998C11.8072 14.6998 14.786 11.7209 14.786 8.04631C14.786 4.37172 11.8072 1.39282 8.13249 1.39282ZM8.13249 2.72352C11.072 2.72352 13.4553 5.1066 13.4553 8.04631C13.4553 10.986 11.072 13.3691 8.13249 13.3691C7.29614 13.3691 6.49306 13.1727 5.76251 12.8077C5.6321 12.7427 5.48907 12.7182 5.34602 12.7453C2.98403 13.1924 3.17165 13.1658 2.97604 13.2028C3.01463 13.0047 2.98135 13.2103 3.43379 10.874C3.46173 10.7294 3.43712 10.569 3.37125 10.4374C2.99999 9.70176 2.8097 8.8897 2.8097 8.04631C2.8097 5.1066 5.19298 2.72352 8.13249 2.72352ZM6.26152 4.71956C5.63742 4.71956 4.80575 5.55125 4.80575 6.17501C4.80575 6.97889 5.63743 8.46215 6.46912 9.29383C6.55894 9.38332 6.79514 9.62019 6.88496 9.70968C7.71665 10.5414 9.19971 11.373 10.0035 11.373C10.6276 11.373 11.4592 10.5414 11.4592 9.9176C11.4592 9.29383 10.6276 8.46215 10.0035 8.46215C9.79587 8.46215 9.04335 8.8923 8.96417 8.87799C8.30149 8.75836 7.4392 7.87518 7.3008 7.21462C7.28151 7.1224 7.71665 6.38294 7.71665 6.17501C7.71665 5.55125 6.88495 4.71956 6.26152 4.71956Z"
                                                                                            fill="#2A343D" />
                                                                                    </svg>



                                                                                    <p
                                                                                        class="text-sm font-normal ml-4">
                                                                                        No.Telp Pengguna</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="relative overflow-x-auto">
                                                                    <table
                                                                        class="h-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-800">
                                                                        <thead class="">
                                                                            <tr
                                                                                class="bg-[#28808C] text-white text-nowrap">
                                                                                <th class="px-6 py-3">Bulan</th>
                                                                                <th class="px-6 py-3">Nominal
                                                                                </th>
                                                                                <th class="px-6 py-3">Tanggal
                                                                                    Bayar
                                                                                </th>
                                                                                <th class="px-6 py-3">Tanggal
                                                                                    Jatuh
                                                                                    Tempo</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @foreach ($transactions as $index => $transaction)
                                                                                <tr class="text-nowrap bg-white">
                                                                                    <td class="px-6 py-4">
                                                                                        {{ $index++ }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4">
                                                                                        {{ 'Rp' . number_format($transaction->total, 0, '.', '.') }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4">
                                                                                        {{ $transaction->property->name }}
                                                                                    </td>
                                                                                    <td class="px-6 py-4">
                                                                                        {{ $transaction->user->name }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Tombol Tutup Pop-up -->
                                                    <div
                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-[#28808C]">
                                                        <button @click="isOpen = false" type="button"
                                                            class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#3f9aa7] text-base font-medium text-white hover:bg-[#65adb8] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#65adb8] sm:ml-3 sm:w-auto sm:text-sm">
                                                            Tutup
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
