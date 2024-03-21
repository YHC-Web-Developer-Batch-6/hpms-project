<x-app-layout>

    <div class="p-4 sm:ml-64">
        <div class="pb-4">
            <p class="text-3xl font-bold text-black">Form Property</p>
        </div>
        <div class="card bg-white p-4 shadow-lg">
            <h1 class="font-medium text-2xl mb-3">Umum</h1>
            <form action="{{ route('property.store') }} " method="POST">
                @csrf
                <div class="grid md:grid-cols-2 gap-2 max-w-full mb-3">
                    {{-- left --}}
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label for="judul" class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="text" name="title" id="judul" 
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="type" class="block text-sm font-medium leading-6 text-gray-900">Tipe</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">
                                    <select id="type" name="type"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#0F4E57] focus:border-[#0F4E57] block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Tipe</option>
                                        <option value="rumah">Rumah</option>
                                        <option value="Tanah">Tanah</option>
                                        <option value="Ruko">Ruko</option>
                                        <option value="Gedung">Gedung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="property_size" class="block text-sm font-medium leading-6 text-gray-900">Luas
                                Property</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="number" name="property_size" id="property_size"
                                       
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full">
                            <label for="surface_size" class="block text-sm font-medium leading-6 text-gray-900">Luas
                                Tanah</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="number" name="surface_size" id="surface_size" 
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- right --}}
                    <div class="max-w-full ">
                        <div class="max-w-full mb-2">
                            <label for="certification"
                                class="block text-sm font-medium leading-6 text-gray-900">Sertifikat</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="text" name="certification" id="certification" 
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="dokumentasi"
                                class="block text-sm font-medium leading-6 text-gray-900">Dokumentasi</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="dokumentasi" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full">
                            <label for="location"
                                class="block text-sm font-medium leading-6 text-gray-900">Lokasi</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="text" name="location" id="location"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- textarea --}}
                <div class="max-w-full">
                    <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Descriptions</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="4"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-[#0F4E57] sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                {{-- detail Harga --}}
                <h1 class="font-medium text-2xl mt-3 mb-3">Detail Harga</h1>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label for="price"
                                class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="number" name="price" id="price" 
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="down_payment" class="block text-sm font-medium leading-6 text-gray-900">Uang
                                Muka</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-[#0F4E57] sm:max-w-full">

                                    <input type="text" name="down_payment" id="down_payment" 
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label class="block text-sm font-medium leading-6 text-gray-900">Metode
                                Pembayaran</label>
                            <div class="mt-2">
                                <div class="flex items-center gap-x-3">
                                    <input id="full-payment" name="installments[]" type="checkbox" value="full_payment"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-[#0F4E57] checked:bg-[#0F4E57]">
                                    <label for="full-payment"
                                        class="block text-sm font-medium leading-6 text-gray-900">Full Payment</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="cicilan-12-Bulan" name="installments[]" type="checkbox" value="cicilan-12-bulan"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-[#0F4E57] checked:bg-[#0F4E57]">
                                    <label for="cicilan-12-Bulan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Cicilan 12
                                        Bulan</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="cicilan-24-bulan" name="installments[]" type="checkbox" value="cicilan-24-bulan"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-[#0F4E57] checked:bg-[#0F4E57]">
                                    <label for="cicilan-24-bulan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Cicilan 24
                                        Bulan</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="cicilan-48-bulan" name="installments[]" type="checkbox" value="cicilan-48-bulan"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-[#0F4E57] checked:bg-[#0F4E57]">
                                    <label for="cicilan-48-bulan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Cicilan 48
                                        Bulan</label>
                                </div>
                                <div class="flex items-center gap-x-3">
                                    <input id="cicilan-60-bulan" name="installments[]" type="checkbox" value="cicilan-60-bulan"
                                        class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-[#0F4E57] checked:bg-[#0F4E57]">
                                    <label for="cicilan-60-bulan"
                                        class="block text-sm font-medium leading-6 text-gray-900">Cicilan 60
                                        Bulan</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <a href="{{ route('property.index') }}" class="text-[##0F4E57]">
                        <button type="button" class="w-24 h-10 border-2 border-[#0F4E57] rounded-lg me-2">Kembali</button>
                    </a>
                    <div class="text-white">
                        <button class="w-24 h-10 bg-[#0F4E57] rounded-lg">Submit</button>
                    </div>
                </div>
            </form>

        </div>

    </div>
</x-app-layout>
