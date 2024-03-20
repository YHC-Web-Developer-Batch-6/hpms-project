<x-app-layout>

    <div class="p-4 sm:ml-64">
        <div class="pb-4">
            <p class="text-3xl font-bold text-black">Form Property</p>
        </div>
        <div class="card bg-white p-4">
            <h1 class="font-medium text-2xl mb-3">Umum</h1>
            <form action="">
                <div class="grid md:grid-cols-2 gap-2 max-w-full mb-3">
                    {{-- left --}}
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label for="judul" class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="judul" id="judul" autocomplete="judul"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="tipe" class="block text-sm font-medium leading-6 text-gray-900">Tipe</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">
                                    <select id="tipe"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                        <option selected>Pilih Tipe</option>
                                        <option value="US">Rumah</option>
                                        <option value="CA">Tanah</option>
                                        <option value="FR">Ruko</option>
                                        <option value="DE">Gedung</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="luas_property" class="block text-sm font-medium leading-6 text-gray-900">Luas
                                Property</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="luas_property" id="luas_property"
                                        autocomplete="luas_property"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Luas
                                Tanah</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="username" id="username" autocomplete="username"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- right --}}
                    <div class="max-w-full ">
                        <div class="max-w-full mb-2">
                            <label for="sertifikasi"
                                class="block text-sm font-medium leading-6 text-gray-900">Sertifikasi</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="sertifikasi" id="sertifikasi" autocomplete="sertifikasi"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="dokumentasi"
                                class="block text-sm font-medium leading-6 text-gray-900">Dokumentasi</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                        aria-describedby="user_avatar_help" id="dokumentasi" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full">
                            <label for="lokasi"
                                class="block text-sm font-medium leading-6 text-gray-900">Lokasi</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="lokasi" id="lokasi" autocomplete="lokasi"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-full">
                    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Descriptions</label>
                    <div class="mt-2">
                        <textarea id="about" name="about" rows="4"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
                <h1 class="font-medium text-2xl mt-3 mb-3">Detail Harga</h1>
                <div class="grid md:grid-cols-2 gap-2">
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label for="harga"
                                class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="harga" id="harga" autocomplete="harga"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="max-w-full mb-2">
                            <label for="uang_muka" class="block text-sm font-medium leading-6 text-gray-900">Uang
                                Muka</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="uang_muka" id="uang_muka" autocomplete="uang_muka"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-full">
                        <div class="max-w-full mb-2">
                            <label for="judul" class="block text-sm font-medium leading-6 text-gray-900">Metode
                                Pembayaran</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-full">

                                    <input type="text" name="judul" id="judul" autocomplete="judul"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>
</x-app-layout>
