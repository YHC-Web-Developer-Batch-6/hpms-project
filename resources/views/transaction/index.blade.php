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
                    <p
                        class="text-sm font-normal text-gray-900 mb-4 md:mb-0 block w-full md:inline md:w-auto">
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
                            <tr
                                class="text-nowrap bg-white">
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
                                    {{ "Rp" . number_format($transaction->total, 0, '.', '.') }}
                                </td>
    
                                <td class="px-6 py-4">
                                    {{ "Rp" . number_format($transaction->total, 0, '.', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ "Rp" . number_format($transaction->total, 0, '.', '.') }}
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
                                    <a href="#" class="underline hover:no-underline">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
