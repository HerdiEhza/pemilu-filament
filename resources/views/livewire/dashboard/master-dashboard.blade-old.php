<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="flex justify-between p-4 space-x-4">
                <div class="grid grid-cols-3 grid-rows-2 gap-4">
                    <select wire:model="kategoriPemiluActive" id="kategori_pemilu_id" name="kategori_pemilu_id"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Kategori PEMILU</option>
                        @foreach ($kategoriPemilus as $kp)
                        <option value="{{ $kp->id }}">{{ $kp->nama_kategori_pemilu }}</option>
                        @endforeach
                    </select>
                    <select wire:model="provinsiActive" id="provinsi" name="provinsi"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="null">Semua Provinsi</option>
                        @foreach ($provinsis as $prov)
                        <option value="{{ $prov->id }}">{{ $prov->name }}</option>
                        @endforeach
                    </select>
                    @if ($this->provinsiActive == null)
                    @elseif ($this->kategoriPemiluActive == 3)
                    @else
                    <select wire:model="kabKotaActive" id="kab-kota" name="kab-kota"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="null">Semua Kab/Kota</option>
                        @foreach ($kabkotas as $kabkota)
                        <option value="{{ $kabkota->id }}">{{ $kabkota->name }}</option>
                        @endforeach
                    </select>
                    @endif
                    @if ($this->provinsiActive == null)
                    @elseif ($this->kategoriPemiluActive == 3)
                    {{-- @elseif ($this->kategoriDaerahActive == 1) --}}
                    @elseif ($this->kabKotaActive == null)
                    @else
                    <select wire:model="kecamatanActive" id="kecamatan" name="kecamatan"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Semua Kecamatan</option>
                        @foreach ($kecamatans as $kec)
                        <option value="{{ $kec->id }}">{{ $kec->name }}</option>
                        @endforeach
                    </select>
                    @endif
                    @if ($this->provinsiActive == null)
                    @elseif ($this->kategoriPemiluActive == 3)
                    @elseif ($this->kabKotaActive == null)
                    @elseif ($this->kecamatanActive == null)
                    @else
                    <select wire:model="kelurahanActive" id="kelurahan" name="kelurahan"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Semua Kelurahan</option>
                        @foreach ($kelurahans as $kel)
                        <option value="{{ $kel->id }}">{{ $kel->name }}</option>
                        @endforeach
                    </select>
                    @endif
                    @if ($this->provinsiActive == null)
                    @elseif ($this->kategoriPemiluActive == 3)
                    @elseif ($this->kabKotaActive == null)
                    @elseif ($this->kecamatanActive == null)
                    @else
                    <select wire:model="tpsActive" id="tps" name="tps"
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                        <option value="">Semua Tps</option>
                        @foreach ($tpsList as $tps)
                        <option value="{{ $tps->id }}">{{ $tps->nama_tps }}</option>
                        @endforeach
                    </select>
                    @endif
                </div>

                <div class="grid grid-rows-2 gap-4">
                    <button wire:click="resetDashboard" wire:loading.attr="disabled"
                        wire:loading.class="cursor-progress" type="button"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800 inline-flex items-center">
                        <div wire:loading wire:target="resetDashboard">
                            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                            Loading...
                        </div>
                        <div wire:loading.remove wire:target="resetDashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="inline w-4 h-4 mr-3 text-white ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            Reset
                        </div>
                    </button>
                    <button wire:click="reloadListDashboard" wire:loading.attr="disabled"
                        wire:loading.class="cursor-progress" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                        <div wire:loading wire:target="reloadListDashboard">
                            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin"
                                viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                    fill="#E5E7EB" />
                                <path
                                    d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                    fill="currentColor" />
                            </svg>
                            Loading...
                        </div>
                        <div wire:loading.remove wire:target="reloadListDashboard">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="inline w-4 h-4 mr-3 text-white ">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            Refresh
                        </div>
                    </button>
                </div>
            </div>

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">

                <h1>DATA PEMILIH DAN PENGGUNAAN HAK PILIH</h1>
    
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                URAIAN
                            </th>
                            @foreach ($partais as $partai)
                                <th scope="col" class="px-6 py-3">
                                    {{ $partai->nama_partai }}
                                </th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @if ($this->kabKotaActive == null and $this->kecamatanActive == null and $this->kelurahanActive == null and $this->tpsActive == null)
                            @foreach ($kabkotas as $kk)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $kk->name }}
                                    </th>
                                    @foreach ($partais as $partai)
                                        <th class="px-6 py-3">
                                            {{ $partai->nama_partai }}
                                        </th>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                        @if ($this->kecamatanActive == null and $this->kelurahanActive == null and $this->tpsActive == null)
                            @foreach ($kecamatans as $kec)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $kec->name }}
                                    </th>
                                    @foreach ($partais as $partai)
                                        <th class="px-6 py-3">
                                            {{ $partai->nama_partai }}
                                        </th>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                        @if ($this->kelurahanActive == null and $this->tpsActive == null)
                            @foreach ($kelurahans as $kel)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $kel->name }}
                                    </th>
                                    @foreach ($partais as $partai)
                                        <th class="px-6 py-3">
                                            {{ $partai->nama_partai }}
                                        </th>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                        @if ($this->tpsActive == null)
                            @foreach ($kelurahans as $kel)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $kel->name }}
                                    </th>
                                    @foreach ($partais as $partai)
                                        <th class="px-6 py-3">
                                            {{ $partai->nama_partai }}
                                        </th>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                
            </div>

        </div>
    </div>
</div>