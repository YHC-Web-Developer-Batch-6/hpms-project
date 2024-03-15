<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Transaction') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No.
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Pembeli
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Properti
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Keterangan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Total
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tipe
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactions as $index => $transaction)
                            <tr
                                class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ ++$index }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $transaction->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->property->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->desc }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaction->total }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    @if ($transaction->status === 'paid')
                                        <i class="fa-solid fa-circle-check text-green-600"></i>
                                    @else
                                        <i class="fa-duotone fa-money-bill-wave"></i>
                                    @endif
                                </td>
                                <td class="px-6 py-4">

                                    {{ $transaction->type }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-app-layout>
