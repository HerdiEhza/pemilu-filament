<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

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
                        @foreach ($kelurahans as $kk)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{-- <a href="{{ route('dashboard.per-kab_kota', preg_replace('/[^A-Za-z0-9-]+/', '-', $kk->name)) }}"> --}}
                                    <a href="{{ route('dashboard.per-kel', ['kab_kota' => $this->kabKotaActive, 'kec' => $this->kecamatanActive, 'kel' => $kk->id]) }}">
                                        {{ $kk->name }} {{ $kk->id }}
                                    </a>
                                </th>
                                @foreach ($partais as $partai)
                                    @foreach ($hasil as $s)
                                    @if ($s->data_partai_id == $partai->id and $s->tps_kel_id == $kk->id)
                                        <th class="px-6 py-3">
                                            <a href="">
                                                {{ $s->total_suara ?? '0' }}
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