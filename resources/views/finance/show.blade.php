<x-app-layout>
    <div class="p-4 sm:ml-64">
        <div class="pb-8">
            <a href='{{ url('finance') }}' type="button"
                class="text-gray-100 bg-[#28808C] hover:bg-[#3D889B]  border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-6">
                <i class="fa-solid fa-arrow-left pr-2"></i>
                Kembali
            </a>
        </div>
        <div class="flex flex-col gap-3">
            <div class="items-center justify-center text-center pb-10">
                <p class="text-3xl font-bold text-black pb-1">Rausyan Property</p>
                <p class="text-black font-semibold">Laporan Keuangan Bulan Januari 2023</p>
            </div>
            <div class="flex justify-between">
                <div class="flez justify-between  ">
                    <div class="flex justify-start items-center mb-6">
                        <p class="text-black mr-10">Saldo Awal</p>
                        <p class="text-white bg-[#28808C] px-6 py-1">100.000.000</p>
                    </div>
                    <div class="flex justify-end items-center">
                        <p class="text-black mr-6">Jumlah Debit</p>
                        <p class="text-white bg-[#28808C] px-6 py-1">100.000.000</p>
                    </div>
                </div>
                <div class="flez justify-between">
                    <div class="flex justify-start items-center mb-6">
                        <p class="text-black mr-10">Saldo Akhir</p>
                        <p class="text-white bg-[#28808C] px-6 py-1">100.000.000</p>
                    </div>
                    <div class="flex justify-end items-center">
                        <p class="text-black mr-6">Jumlah Kredit</p>
                        <p class="text-white bg-[#28808C] px-6 py-1">100.000.000</p>
                    </div>
                </div>
            </div>
            <div class="relative overflow-x-auto rounded-lg pt-6">
                <table class="h-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-800 w-full">
                    <thead class="">
                        <tr class="bg-[#28808C] text-white text-nowrap">
                            <th class="px-6 py-3">Tanggal</th>
                            <th class="px-6 py-3">Keterangan
                            </th>
                            <th class="px-6 py-3">Debit
                            </th>
                            <th class="px-6 py-3">Kredit</th>
                            <th class="px-6 py-3">Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-nowrap bg-white">
                            <td class="px-6 py-4">
                            </td>
                            <td class="px-6 py-4">
                            </td>
                            <td class="px-6 py-4">
                            </td>
                            <td class="px-6 py-4">
                            </td>
                            <td class="px-6 py-4">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
