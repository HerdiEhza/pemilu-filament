<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <ul class="flex justify-around py-4 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="w-full">
                    <a href="{{ route('dashboard') }}" aria-current="page" class="flex w-full p-4 bg-gray-100 rounded-t-lg hover:text-gray-600 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-300">Per DAPIL</a>
                </li>
                <li class="w-full">
                    <a href="{{ route('dashboard.per-wilayah') }}" aria-current="page" class="flex w-full p-4 text-white bg-blue-400 rounded-t-lg hover:bg-blue-500 active dark:bg-gray-800 dark:text-blue-500">Per Wilayah</a>
                </li>
            </ul>

            {{-- <select wire:model="provinsiActive" name="provinsiActive">
                <option value="">Semua Provinsi</option>
                @foreach ($provinsis as $provinsi)
                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                @endforeach
            </select> --}}
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
                        @foreach ($kecamatans as $data)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <a href="{{ route('dashboard.per-kec', ['prov' => $this->provinsiActive, 'kab_kota' => $this->kabKotaActive, 'kec' => $data->id]) }}">
                                        {{ $data->name }}
                                    </a>
                                </th>
                                @foreach ($partais as $partai)
                                    @foreach ($suaras as $suara)
                                    @if ($suara->data_partai_id == $partai->id and $suara->tps_kec_id == $data->id)
                                        <th class="px-6 py-3">
                                            <a href="">
                                                {{ $suara->total_suara ?? '0' }}
                                            </a>
                                        </th>
                                    @endif
                                    @endforeach
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
