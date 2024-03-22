<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property') }}
        </h2>
    </x-slot>
    <div class="p-4 sm:ml-64">
        <div class="pb-8">
            <p class="text-3xl font-bold text-black">My Property</p>
            <p class="text-black">Check Your Product Again!</p>
        </div>
        <div class="flex flex-col gap-3">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full">
                {{-- data table --}}
                <div class="card bg-white w-full">
                    <div class="mb-4  border-gray-700">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab"
                            data-tabs-toggle="#default-styled-tab-content"
                            data-tabs-active-classes="text-[#3D889B] dark:text-[#3D889B] hover:text-[#7CB6C5] dark:hover:text-[#7CB6C5] border-[#0F4E57] dark:border-[#0F4E57]"
                            data-tabs-inactive-classes="border-transparent text-gray-500 hover:text-gray-600 text-gray-400 border-gray-100 hover:border-gray-300 border-gray-700 hover:text-gray-300"
                            role="tablist">
                            <li class="me-2" role="presentation">
                                <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab"
                                    data-tabs-target="#styled-profile" type="button" role="tab"
                                    aria-controls="profile" aria-selected="false">Di Tampilkan</button>
                            </li>
                            <li class="me-2" role="presentation">
                                <button
                                    class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 "
                                    id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button"
                                    role="tab" aria-controls="dashboard" aria-selected="false">Di
                                    Arsipkan</button>
                            </li>
                        </ul>
                    </div>
                    <div id="default-styled-tab-content">
                        <div class="hidden px-4 py-4 rounded-lg bg-white " id="styled-profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="flex mb-3 justify-between sm:max-w-full">
                                <div class="flex">
                                    <button type="button"
                                        onclick="window.location.href = '{{ route('property.create') }}'"
                                        class="text-gray-100 bg-[#28808C] hover:bg-[#3D889B]  border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-6">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width=24 height=24
                                            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"
                                                fill='white' />
                                        </svg>
                                        List New Property
                                    </button>
                                </div>
                                <div class="flex justify-start">
                                    <a href="{{ request('sold') === '1' ? route('property.index') : route('property.index', ['sold' => '1']) }}"
                                        class="py-2 px-4 border border-[#28808C] rounded shadow mr-2 
                                        {{ request('sold') === '1' || (empty(request('sold')) && !empty(request()->routeIs('property.index')) && request()->route()->getName() == 'property.index' && request()->route()->hasParameter('sold') && request()->route('sold') == '1') ? 'bg-[#D9D9D9] bg-opacity-50' : 'bg-white hover:bg-gray-100' }} text-gray-800 font-semibold">
                                        Terjual
                                    </a>
                                    <a href="{{ request('sold') === '0' ? route('property.index') : route('property.index', ['sold' => '0']) }}"
                                        class="py-2 px-4 border border-[#28808C] rounded shadow 
                                        {{ request('sold') === '0' || (empty(request('sold')) && !empty(request()->routeIs('property.index')) && request()->route()->getName() == 'property.index' && request()->route()->hasParameter('sold') && request()->route('sold') == '0') ? 'bg-[#D9D9D9] bg-opacity-50' : 'bg-white hover:bg-gray-100' }} text-gray-800 font-semibold">
                                        Tersedia
                                    </a>
                                </div>
                            </div>
                            <div class="overflow-x-auto">
                                <table id="example" class="max-w-full">
                                    <thead class="bg-[#3D889B]">
                                        <tr>
                                            <th>No.</th>
                                            <th><span class="sr-only">Image</span></th>
                                            <th>Property</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($propertiesUnarchive as $index => $property)
                                            <tr class="border-b drak:odd:bg-white drak:even:bg-gray-50 ">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                    {{ ++$index }}
                                                </th>
                                                <td class="p-4">
                                                    <img src="{{ $property->getFirstMediaUrl('property') }}"
                                                        class="w-16 md:w-32 max-w-full max-h-full" alt="">
                                                </td>
                                                <td class="px-2 py-4">
                                                    <div class="block">
                                                        <p class="font-bold">{{ $property->title }}</p>
                                                        <p>{{ Str::limit($property->location, 50) }}</p>
                                                        <p>{{ 'Rp' . number_format($property->price, 0, '.', '.') }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 ">
                                                    {{ $property->created_at->format('j F Y') }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if ($property->is_sold === 1)
                                                        <p class="text-[#D1293D] font-bold">Terjual</p>
                                                    @else
                                                        <p class="text-[#12C95F] font-bold">Tersedia</p>
                                                    @endif
                                                </td>
                                                <td class="flex px-6 my-8">
                                                    <div x-data="{ isOpen: false }">
                                                        <a href="#" @click.prevent="isOpen = true">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                height="22" viewBox="0 0 192 512">
                                                                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                <path
                                                                    d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                                            </svg>
                                                        </a>
                                                        <div x-show="isOpen" @click.away="isOpen = false"
                                                            class="fixed z-10 inset-0 overflow-y-auto">
                                                            <div
                                                                class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                <div class="fixed inset-0 transition-opacity"
                                                                    aria-hidden="true">
                                                                    <div
                                                                        class="absolute inset-0 bg-gray-500 opacity-75">
                                                                    </div>
                                                                </div>

                                                                <!-- Isi Pop-up -->
                                                                <span
                                                                    class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                    aria-hidden="true">&#8203;</span>
                                                                <div x-show="isOpen"
                                                                    class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                                                                    <div
                                                                        class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex border-b border-[#28808C]">
                                                                        <p class="text-2xl font-bold px-4 py-2">
                                                                            Detail
                                                                        </p>
                                                                    </div>
                                                                    <div
                                                                        class="bg-gray-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                        <!-- Konten Pop-up -->
                                                                        <div class="sm:flex sm:items-start">
                                                                            <div
                                                                                class="text-center sm:mt-0 sm:text-left w-full overflow-y-auto">
                                                                                <p class="text-2xl font-bold py-2">
                                                                                    Perumahan Manggis
                                                                                </p>
                                                                                <p
                                                                                    class="items-right justify-end text-right text-xs font-semibold mb-2 text-[#28808C]">
                                                                                    Diterbitkan :
                                                                                    <span>14
                                                                                        Februari</span>
                                                                                </p>
                                                                                <div
                                                                                    class="bg-black rounded-lg w-full h-80">
                                                                                </div>
                                                                                <div
                                                                                    class="md:flex md:justify-between block my-10 ">
                                                                                    <div class="flex">
                                                                                        <div class="block mb-4">
                                                                                            <p
                                                                                                class="text-xl font-bold text-start text-[#0F4E57]">
                                                                                                Umum
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start  mt-3">
                                                                                                Tipe
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Luas Bangunan
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Luas Tanah</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Sertifikasi</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Alamat Lokasi
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Harga</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                DP</p>
                                                                                        </div>
                                                                                        <div class="block mt-10 ml-8">
                                                                                            <p> </p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                            <p>:</p>
                                                                                        </div>
                                                                                        <div class="block mt-10 ml-4">
                                                                                            <p></p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Rumah</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                64</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                166</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                SHM-Sertifikat
                                                                                                Hak
                                                                                                Milik</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Banjarmasin,
                                                                                                Indonesia</p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Rp.640.000.000
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black text-start">
                                                                                                Rp.60.000.000
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="block justify-end">
                                                                                        <p
                                                                                            class="text-xl font-bold text-[#0F4E57] text-start">
                                                                                            Metode Pembayaran
                                                                                        </p>
                                                                                        <ul
                                                                                            class="text-sm text-black mt-3 list-disc ml-4">
                                                                                            <li class="text-start">
                                                                                                Payment Full
                                                                                            </li>
                                                                                            <li class="text-start">
                                                                                                Cicilan 12 Bulan
                                                                                            </li>
                                                                                            <li class="text-start">
                                                                                                Cicilan 24 Bulan
                                                                                            </li>
                                                                                            <li class="text-start">
                                                                                                Cicilan 48 Bulan
                                                                                            </li>
                                                                                            <li class="text-start">
                                                                                                Cicilan 60 Bulan
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="block">
                                                                                    <p
                                                                                        class="text-xl font-bold text-black">
                                                                                        Deskripsi</p>
                                                                                    <p
                                                                                        class="text-sm font-normal my-4 text-wrap text-black">
                                                                                        "Lorem ipsum
                                                                                        dolor sit amet,
                                                                                        consectetur adipisicing
                                                                                        elit,
                                                                                        sed do eiusmod tempor
                                                                                        incididunt
                                                                                        ut labore et dolore
                                                                                        magna
                                                                                        aliqua. Ut enim ad minim
                                                                                        veniam,
                                                                                        quis nostrud
                                                                                        exercitation
                                                                                        ullamco laboris nisi ut
                                                                                        aliquip
                                                                                        ex ea commodo consequat.
                                                                                        Duis
                                                                                        aute irure dolor in
                                                                                        reprehenderit in
                                                                                        voluptate
                                                                                        velit
                                                                                        esse cillum dolore eu
                                                                                        fugiat
                                                                                        nulla pariatur.
                                                                                        Excepteur
                                                                                        sint
                                                                                        occaecat cupidatat non
                                                                                        proident,
                                                                                        sunt in culpa qui
                                                                                        officia
                                                                                        deserunt mollit anim id
                                                                                        est
                                                                                        laborum."
                                                                                    </p>
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
                                                    <a
                                                        href="{{ route('property.archive', ['id' => $property->id]) }}">
                                                        <svg width="26" height="26" viewBox="0 0 37 37"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M18.5 27.75L24.6667 21.5833L22.5083 19.425L20.0417 21.8917V15.4167H16.9583V21.8917L14.4917 19.425L12.3333 21.5833L18.5 27.75ZM7.70833 12.3333V29.2917H29.2917V12.3333H7.70833ZM7.70833 32.375C6.86042 32.375 6.13455 32.0731 5.53073 31.4693C4.92691 30.8655 4.625 30.1396 4.625 29.2917V10.0594C4.625 9.69965 4.68281 9.35278 4.79844 9.01875C4.91406 8.68472 5.0875 8.37639 5.31875 8.09375L7.24583 5.74271C7.52847 5.38299 7.88177 5.10677 8.30573 4.91406C8.72969 4.72135 9.17292 4.625 9.63542 4.625H27.3646C27.8271 4.625 28.2703 4.72135 28.6943 4.91406C29.1182 5.10677 29.4715 5.38299 29.7542 5.74271L31.6812 8.09375C31.9125 8.37639 32.0859 8.68472 32.2016 9.01875C32.3172 9.35278 32.375 9.69965 32.375 10.0594V29.2917C32.375 30.1396 32.0731 30.8655 31.4693 31.4693C30.8655 32.0731 30.1396 32.375 29.2917 32.375H7.70833ZM8.325 9.25H28.675L27.3646 7.70833H9.63542L8.325 9.25Z"
                                                                fill="black" />
                                                        </svg>

                                                    </a>
                                                    <a
                                                        href="{{ route('property.edit', ['property' => $property->id]) }}">
                                                        <svg width="30" height="26" viewBox="0 0 35 35"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <mask id="mask0_15_2159" style="mask-type:luminance"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="30"
                                                                height="30">
                                                                <path d="M35 0H0V35H35V0Z" fill="white" />
                                                            </mask>
                                                            <g mask="url(#mask0_15_2159)">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M25.5251 4.52513C26.8919 3.15829 29.1081 3.15829 30.4749 4.52513C31.8418 5.89195 31.8418 8.10803 30.4749 9.47487L17.1998 22.75H12.25V17.8002L25.5251 4.52513ZM7 7C5.067 7 3.5 8.567 3.5 10.5V28C3.5 29.9331 5.067 31.5 7 31.5H24.5C26.4331 31.5 28 29.9331 28 28V21C28 20.0335 27.2165 19.25 26.25 19.25C25.2835 19.25 24.5 20.0335 24.5 21V28H7V10.5H14C14.9665 10.5 15.75 9.71649 15.75 8.75C15.75 7.78351 14.9665 7 14 7H7Z"
                                                                    fill="#111827" />
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- Table Arsip --}}
                        <div class="hidden px-4 py-4 rounded-lg bg-white " id="styled-dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            @if ($propertiesArchive->count() > 0)
                                <div class="flex mb-3 justify-between sm:max-w-full">
                                    <div class="flex">
                                        <button type="button"
                                            onclick="window.location.href = '{{ route('property.create') }}'"
                                            class="text-gray-100 bg-[#28808C] hover:bg-[#3D889B]  border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center me-6">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width=24 height=24
                                                viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                <path
                                                    d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"
                                                    fill='white' />
                                            </svg>
                                            List New Property
                                        </button>
                                    </div>
                                    <div class="flex justify-start">
                                        <a href="{{ request('sold') === '1' ? route('property.index') : route('property.index', ['sold' => '1']) }}"
                                            class="py-2 px-4 border border-[#28808C] rounded shadow mr-2 
                                            {{ request('sold') === '1' || (empty(request('sold')) && !empty(request()->routeIs('property.index')) && request()->route()->getName() == 'property.index' && request()->route()->hasParameter('sold') && request()->route('sold') == '1') ? 'bg-[#D9D9D9] bg-opacity-50' : 'bg-white hover:bg-gray-100' }} text-gray-800 font-semibold">
                                            Terjual
                                        </a>
                                        <a href="{{ request('sold') === '0' ? route('property.index') : route('property.index', ['sold' => '0']) }}"
                                            class="py-2 px-4 border border-[#28808C] rounded shadow 
                                            {{ request('sold') === '0' || (empty(request('sold')) && !empty(request()->routeIs('property.index')) && request()->route()->getName() == 'property.index' && request()->route()->hasParameter('sold') && request()->route('sold') == '0') ? 'bg-[#D9D9D9] bg-opacity-50' : 'bg-white hover:bg-gray-100' }} text-gray-800 font-semibold">
                                            Tersedia
                                        </a>
                                    </div>
                                </div>
                                <div class="overflow-x-auto">
                                    <table id="example-archived" class="max-w-full">
                                        <thead class="bg-[#3D889B]">
                                            <tr>
                                                <th>No.</th>
                                                <th><span class="sr-only">Image</span></th>
                                                <th>Property</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($propertiesArchive as $index => $property)
                                                <tr class="border-b odd:bg-white even:bg-gray-50">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                        {{ ++$index }}
                                                    </th>
                                                    <td class="p-4">
                                                        <img src="{{ $property->getFirstMediaUrl('property') }}"
                                                            class="w-16 md:w-32 max-w-full max-h-full" alt="">
                                                    </td>
                                                    <td class="px-2 py-4">
                                                        <div class="block">
                                                            <p class="font-bold">{{ $property->title }}</p>
                                                            <p>{{ Str::limit($property->location, 50) }}</p>
                                                            <p>{{ 'Rp' . number_format($property->price, 0, '.', '.') }}
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 ">
                                                        {{ $property->created_at->format('j F Y') }}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        @if ($property->is_sold === 1)
                                                            <p class="text-[#D1293D] font-bold">Terjual</p>
                                                        @else
                                                            <p class="text-[#12C95F] font-bold">Tersedia</p>
                                                        @endif
                                                    </td>
                                                    <td class="flex px-6 my-8">
                                                        <div x-data="{ isOpen: false }">
                                                            <a href="#" @click.prevent="isOpen = true">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="26"
                                                                    height="22" viewBox="0 0 192 512">
                                                                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                                    <path
                                                                        d="M48 80a48 48 0 1 1 96 0A48 48 0 1 1 48 80zM0 224c0-17.7 14.3-32 32-32H96c17.7 0 32 14.3 32 32V448h32c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H64V256H32c-17.7 0-32-14.3-32-32z" />
                                                                </svg>
                                                            </a>
                                                            <div x-show="isOpen" @click.away="isOpen = false"
                                                                class="fixed z-10 inset-0 overflow-y-auto">
                                                                <div
                                                                    class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                                    <div class="fixed inset-0 transition-opacity"
                                                                        aria-hidden="true">
                                                                        <div
                                                                            class="absolute inset-0 bg-gray-500 opacity-75">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Isi Pop-up -->
                                                                    <span
                                                                        class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                                        aria-hidden="true">&#8203;</span>
                                                                    <div x-show="isOpen"
                                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full">
                                                                        <div
                                                                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex border-b border-[#28808C]">
                                                                            <p class="text-2xl font-bold px-4 py-2">
                                                                                Detail
                                                                            </p>
                                                                        </div>
                                                                        <div
                                                                            class="bg-gray-100 px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                                            <!-- Konten Pop-up -->
                                                                            <div class="sm:flex sm:items-start">
                                                                                <div
                                                                                    class="text-center sm:mt-0 sm:text-left w-full overflow-y-auto">
                                                                                    <p class="text-2xl font-bold py-2">
                                                                                        Perumahan Manggis
                                                                                    </p>
                                                                                    <p
                                                                                        class="items-right justify-end text-right text-xs font-semibold mb-2 text-[#28808C]">
                                                                                        Diterbitkan :
                                                                                        <span>14
                                                                                            Februari</span>
                                                                                    </p>
                                                                                    <div
                                                                                        class="bg-black rounded-lg w-full h-80">
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex justify-between my-10">
                                                                                        <div
                                                                                            class="block justify-start">
                                                                                            <p
                                                                                                class="text-xl font-bold text-[#0F4E57]">
                                                                                                Umum
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-4">
                                                                                                <span
                                                                                                    class="w-20 mr-20">Tipe</span><span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">Rumah</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-3">Luas
                                                                                                    Bangunan</span><span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">64</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-10">Luas
                                                                                                    Tanah</span><span
                                                                                                    class="ml-[15px]">:</span><span
                                                                                                    class="ml-4">166</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-12">Sertifikasi</span><span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">SHM
                                                                                                    -
                                                                                                    Sertifikat Hak
                                                                                                    Milik</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-16">Lokasi</span>
                                                                                                <span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">Banjarmasin,
                                                                                                    Indonesia</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-[68px]">Harga</span><span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">Rp.640.000.000</span>
                                                                                            </p>
                                                                                            <p
                                                                                                class="text-sm text-black mt-2">
                                                                                                <span
                                                                                                    class="w-20 mr-[86px]">DP</span><span
                                                                                                    class="ml-4">:</span><span
                                                                                                    class="ml-4">Rp.60.000.000</span>
                                                                                            </p>

                                                                                        </div>
                                                                                        <div class="block justify-end">
                                                                                            <p
                                                                                                class="text-xl font-bold text-[#0F4E57]">
                                                                                                Metode Pembayaran
                                                                                            </p>
                                                                                            <ul
                                                                                                class="text-sm text-black mt-4 list-disc ml-4">
                                                                                                <li>Payment Full</li>
                                                                                                <li>Cicilan 12 Bulan
                                                                                                </li>
                                                                                                <li>Cicilan 24 Bulan
                                                                                                </li>
                                                                                                <li>Cicilan 48 Bulan
                                                                                                </li>
                                                                                                <li>Cicilan 60 Bulan
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="block">
                                                                                        <p
                                                                                            class="text-xl font-bold text-black">
                                                                                            Deskripsi</p>
                                                                                        <p
                                                                                            class="text-sm font-normal my-4 text-wrap">
                                                                                            "Lorem ipsum
                                                                                            dolor sit amet,
                                                                                            consectetur adipisicing
                                                                                            elit,
                                                                                            sed do eiusmod tempor
                                                                                            incididunt
                                                                                            ut labore et dolore magna
                                                                                            aliqua. Ut enim ad minim
                                                                                            veniam,
                                                                                            quis nostrud exercitation
                                                                                            ullamco laboris nisi ut
                                                                                            aliquip
                                                                                            ex ea commodo consequat.
                                                                                            Duis
                                                                                            aute irure dolor in
                                                                                            reprehenderit in voluptate
                                                                                            velit
                                                                                            esse cillum dolore eu fugiat
                                                                                            nulla pariatur. Excepteur
                                                                                            sint
                                                                                            occaecat cupidatat non
                                                                                            proident,
                                                                                            sunt in culpa qui officia
                                                                                            deserunt mollit anim id est
                                                                                            laborum."
                                                                                        </p>

                                                                                    </div>


                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Tombol Tutup Pop-up -->
                                                                        <div
                                                                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse border-t border-[#28808C]">
                                                                            <button @click="isOpen = false"
                                                                                type="button"
                                                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-[#3f9aa7] text-base font-medium text-white hover:bg-[#65adb8] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#65adb8] sm:ml-3 sm:w-auto sm:text-sm">
                                                                                Tutup
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a
                                                            href="{{ route('property.archive', ['id' => $property->id]) }}">
                                                            <svg width="37" height="37" viewBox="0 0 37 37"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M18.5 27.75L24.6667 21.5833L22.5083 19.425L20.0417 21.8917V15.4167H16.9583V21.8917L14.4917 19.425L12.3333 21.5833L18.5 27.75ZM7.70833 12.3333V29.2917H29.2917V12.3333H7.70833ZM7.70833 32.375C6.86042 32.375 6.13455 32.0731 5.53073 31.4693C4.92691 30.8655 4.625 30.1396 4.625 29.2917V10.0594C4.625 9.69965 4.68281 9.35278 4.79844 9.01875C4.91406 8.68472 5.0875 8.37639 5.31875 8.09375L7.24583 5.74271C7.52847 5.38299 7.88177 5.10677 8.30573 4.91406C8.72969 4.72135 9.17292 4.625 9.63542 4.625H27.3646C27.8271 4.625 28.2703 4.72135 28.6943 4.91406C29.1182 5.10677 29.4715 5.38299 29.7542 5.74271L31.6812 8.09375C31.9125 8.37639 32.0859 8.68472 32.2016 9.01875C32.3172 9.35278 32.375 9.69965 32.375 10.0594V29.2917C32.375 30.1396 32.0731 30.8655 31.4693 31.4693C30.8655 32.0731 30.1396 32.375 29.2917 32.375H7.70833ZM8.325 9.25H28.675L27.3646 7.70833H9.63542L8.325 9.25Z"
                                                                    fill="black" />
                                                            </svg>


                                                        </a>
                                                        <a
                                                            href="{{ route('property.edit', ['property' => $property->id]) }}">
                                                            <svg width="30" height="26" viewBox="0 0 35 35"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <mask id="mask0_15_2159" style="mask-type:luminance"
                                                                    maskUnits="userSpaceOnUse" x="0" y="0"
                                                                    width="30" height="30">
                                                                    <path d="M35 0H0V35H35V0Z" fill="white" />
                                                                </mask>
                                                                <g mask="url(#mask0_15_2159)">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                                        d="M25.5251 4.52513C26.8919 3.15829 29.1081 3.15829 30.4749 4.52513C31.8418 5.89195 31.8418 8.10803 30.4749 9.47487L17.1998 22.75H12.25V17.8002L25.5251 4.52513ZM7 7C5.067 7 3.5 8.567 3.5 10.5V28C3.5 29.9331 5.067 31.5 7 31.5H24.5C26.4331 31.5 28 29.9331 28 28V21C28 20.0335 27.2165 19.25 26.25 19.25C25.2835 19.25 24.5 20.0335 24.5 21V28H7V10.5H14C14.9665 10.5 15.75 9.71649 15.75 8.75C15.75 7.78351 14.9665 7 14 7H7Z"
                                                                        fill="#111827" />
                                                                </g>
                                                            </svg>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @else
                                <p class="text-sm text-gray-500">
                                    Belum Ada Yang di Arsipkan
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#example-archived').DataTable({
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
        });
        $('#example').DataTable({
            lengthMenu: [
                [5, 10, 25, 50, -1],
                [5, 10, 25, 50, "All"]
            ],
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.js"
    integrity="sha512-BJ/5sR2hFxQTKin/55JQCcMTObShDBAmVjL/3NR/MVcrhyOazJjAgvROem03+HYyGw16SVdSfoWCFGr9syxAKA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
