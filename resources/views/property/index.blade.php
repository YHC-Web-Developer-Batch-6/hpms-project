<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Property') }}
        </h2>
    </x-slot>

    <div class="p-4 sm:ml-64">
        <div class="pl-8 pb-8">
            <p class="text-3xl font-bold">My Property</p>
            <p class="">Check Your Product Again!</p>
        </div>
        <div class="flex items-center ms-7">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg max-w-full">
                <table class="text-sm text-left rtl:text-right text-gray-800 dark:text-gray-800">
                    <caption
                        class="p-5 text-lg items-center font-semibold text-left rtl:text-right bg-white dark:text-white dark:bg-gray-300">
                        <div class="flex items-center justify-between">
                            <div class="flex justify-start items-center">
                                <p
                                    class="text-sm font-normal text-gray-900 mb-4 md:mb-0 block w-full md:inline md:w-auto">
                                    Showing
                                </p>
                                <form class=" ml-3 form-horizontal items-center">
                                    <div class="form-group items-center">
                                        <select class="form-control items-center w-1 h-9 rounded-md text-black">
                                            <option>5</option>
                                            <option>10</option>
                                            <option>15</option>
                                            <option>20</option>
                                        </select>
                                    </div>
                                </form>

                                <p class="ml-3 text-sm font-normal text-gray-900">Enteries Per Page
                                </p>
                            </div>
                            <div class="flex justify-end">
                                <button type="button"
                                    class="text-black hover:text-white border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Sold</button>
                                <button type="button"
                                    class="text-black hover:text-white mr-14 border border-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2  dark:border-gray-600 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-800">Available</button>
                                <button type="button"
                                    class="text-white bg-gray-500 hover:bg-gray-500 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-gray-600 dark:hover:bg-gray-700 dark:focus:ring-blue-800">
                                    <i class="fa-solid fa-plus mr-2"></i>
                                    <a href="{{ url('property.add') }}">List New Property</a>
                                </button>
                            </div>
                        </div>
                    </caption>
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
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
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
                                                    maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
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
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
