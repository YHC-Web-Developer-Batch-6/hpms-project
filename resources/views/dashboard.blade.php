<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>




    <div class="p-4 sm:ml-64">
        <div class="p-4 ">
            <div class="grid grid-cols-3 gap-4 mb-4">
                <div class="flex justify-start h-36  bg-gray-50 dark:bg-white shadow-xl rounded-[16px]">
                    <p class="text-2xl text-gray-400 dark:text-black p-8">
                        Property

                    </p>
                </div>
                <div class="flex items-center justify-center h-36  bg-gray-50 dark:bg-white shadow-xl rounded-[16px]">
                    <p class="text-2xl text-gray-400 dark:text-black">

                    </p>
                </div>
                <div class="flex items-center justify-center h-36  bg-gray-50 dark:bg-white shadow-xl rounded-[16px]">
                    <p class="text-2xl text-gray-400 dark:text-black">

                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
