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
            <div class="flex">
                <div class="flex justify-end">
                    <button type="button"
                        class="text-gray-100 bg-[#28808C] hover:bg-[#3D889B]  border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 me-6">
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
                    <a href="#"
                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-[#28808C] rounded shadow mr-2">Terjual</a>
                    <a href="#"
                        class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-[#28808C] rounded shadow">Tersedia</a>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full">
                {{-- <table id="example">
                    <thead class="text-xs text-gray-800 uppercase bg-gray-50 dark:bg-gray-400 dark:text-gray-800">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    No.
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-16 py-3">
                                <span class="sr-only">Image</span>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Property
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Date
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Status
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Action
                                    <a href="#"><svg class="w-3 h-3 ms-1.5" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                        </svg></a>
                                </div>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($properties as $index => $property)
                            @if ($property->is_archive === 0)
                                <tr
                                    class="odd:bg-white odd:dark:bg-gray-300 even:bg-gray-50 even:dark:bg-gray-200 border-b dark:border-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                        {{ ++$index }}
                                    </th>
                                    <td class="p-4">
                                        <img src="{{ $property->getFirstMediaUrl('property') }}"
                                            class="w-16 md:w-32 max-w-full max-h-full" alt="">
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="block">
                                            <p class="font-bold">{{ $property->title }}</p>
                                            <p>{{ Str::limit($property->location, 50) }}</p>
                                            <p>{{ 'Rp' . number_format($property->price, 0, '.', '.') }}</p>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 font-bold">
                                        {{ $property->created_at->format('j F Y') }}
                                    </td>
                                    <td class="px-6 py-4">
                                        @if ($property->is_sold === 1)
                                            <p class="text-[#D1293D] font-bold">Terjual</p>
                                        @else
                                            <p class="text-[#12C95F] font-bold">Tersedia</p>
                                        @endif
                                    </td>
                                    <td class="flex span-2 px-6 py-4">
                                        <a href="">
                                            <svg width="30" height="30" viewBox="0 0 35 35" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <mask id="mask0_15_2141" style="mask-type:luminance"
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="30"
                                                    height="30">
                                                    <path d="M35 0H0V35H35V0Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_15_2141)">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.75 3.5C15.0872 3.5 14.4812 3.87452 14.1847 4.46739L12.9184 7H7C6.0335 7 5.25 7.78351 5.25 8.75C5.25 9.71649 6.0335 10.5 7 10.5V28C7 29.9331 8.567 31.5 10.5 31.5H24.5C26.4331 31.5 28 29.9331 28 28V10.5C28.9665 10.5 29.75 9.71649 29.75 8.75C29.75 7.78351 28.9665 7 28 7H22.0816L20.8153 4.46739C20.5188 3.87452 19.9128 3.5 19.25 3.5H15.75ZM12.25 14C12.25 13.0335 13.0335 12.25 14 12.25C14.9665 12.25 15.75 13.0335 15.75 14V24.5C15.75 25.4665 14.9665 26.25 14 26.25C13.0335 26.25 12.25 25.4665 12.25 24.5V14ZM21 12.25C20.0335 12.25 19.25 13.0335 19.25 14V24.5C19.25 25.4665 20.0335 26.25 21 26.25C21.9665 26.25 22.75 25.4665 22.75 24.5V14C22.75 13.0335 21.9665 12.25 21 12.25Z"
                                                        fill="#111827" />
                                                </g>
                                            </svg>
                                        </a>
                                        <a href="">
                                            <svg width="30" height="30" viewBox="0 0 35 35" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
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
                            @endif
                        @endforeach
                    </tbody>
                </table> --}}

                {{-- data table --}}
                <div class="card bg-white w-full">
                    <div class="card-body">

                        <table id="example" class="" style="width:100%">
                            <thead>
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
                                @foreach ($properties as $index => $property)
                                    @if ($property->is_archive === 0)
                                        <tr
                                            class="odd:bg-white odd:dark:bg-gray-300 even:bg-gray-50 even:dark:bg-gray-200 border-b dark:border-gray-600">
                                            <th scope="row"
                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-black">
                                                {{ ++$index }}
                                            </th>
                                            <td class="p-4">
                                                <img src="{{ $property->getFirstMediaUrl('property') }}"
                                                    class="w-16 md:w-32 max-w-full max-h-full" alt="">
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="block">
                                                    <p class="font-bold">{{ $property->title }}</p>
                                                    <p>{{ Str::limit($property->location, 50) }}</p>
                                                    <p>{{ 'Rp' . number_format($property->price, 0, '.', '.') }}
                                                    </p>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 font-bold">
                                                {{ $property->created_at->format('j F Y') }}
                                            </td>
                                            <td class="px-6 py-4">
                                                @if ($property->is_sold === 1)
                                                    <p class="text-[#D1293D] font-bold">Terjual</p>
                                                @else
                                                    <p class="text-[#12C95F] font-bold">Tersedia</p>
                                                @endif
                                            </td>
                                            <td class="flex px-9 my-8 items-center">
                                                <a href="">
                                                    <svg width="26" height="26" viewBox="0 0 33 33"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M28.875 11V28.875H4.125V11" stroke="black"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M31.625 4.125H1.375V11H31.625V4.125Z" stroke="black"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M13.75 16.5H19.25" stroke="black" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>

                                                </a>
                                                <a href="">
                                                    <svg width="30" height="30" viewBox="0 0 35 35"
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
                                    @endif
                                @endforeach
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>No.</th>
                                    <th><span class="sr-only">Image</span></th>
                                    <th>Property</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            // Add any customization options here
        });
    });
</script>
