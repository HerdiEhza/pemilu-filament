<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">

                <a href="{{ route('dashboard.per-tps-paslon', ['kab_kota' => $this->kabKotaActive, 'kec' => $this->kecamatanActive, 'kel' => $this->kelurahanActive, 'tps' => $this->tpsActive]) }}">Check hasil suara pasangan calon</a>

                <h1>DATA PEMILIH DAN PENGGUNAAN HAK PILIH</h1>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th colspan="2" class="px-6 py-3">
                                URAIAN
                            </th>
                            <th class="px-6 py-3">
                                JUMLAH (L+P)
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                PEMILIH TERDAFTAR (DPT)
                            </th>
                            <th width="150" class="px-6 py-3">
                                {{ $jumlahDpt->jumlah_dpt }}
                            </th>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                PENGGUNA HAK PILIH
                            </th>
                            <th width="150" class="px-6 py-3">
                                {{ $jumlahSuaraSah->total_suara_sah + $jumlahSuaraTidakSah->jumlah_suara_tidak_sah }}
                            </th>
                        </tr>
                    </tbody>
                </table>

                <h1>PEROLEHAN SUARA</h1>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">
                                URAIAN
                            </th>
                            <th class="px-6 py-3">
                                SUARA SAH
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($partais as $partai)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th class="w-full px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{-- <a href="{{ route('dashboard.per-kab_kota', preg_replace('/[^A-Za-z0-9-]+/', '-', $partai->name)) }}"> --}}
                                    <a href="{{ route('dashboard.per-partai', ['kab_kota' => $this->kabKotaActive, 'kec' => $this->kecamatanActive, 'kel' => $this->kelurahanActive, 'tps' => $this->tpsActive, 'partai' => $partai->id]) }}">
                                        {{ $partai->nama_partai }}
                                    </a>
                                </th>
                                {{-- @foreach ($partais as $partai) --}}
                                    @foreach ($hasil as $s)
                                    @if ($s->data_partai_id == $partai->id and $s->tps_id == $this->tpsActive)
                                        <th width="150" class="px-6 py-3">
                                            <a href="">
                                                {{ $s->total_suara ?? '0' }}
                                            </a>
                                        </th>
                                    @endif
                                    @endforeach
                                {{-- @endforeach --}}
                                {{-- <th width="150" class="px-6 py-3">
                                    <a href="">
                                        100
                                    </a>
                                </th> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <h1>JUMLAH SUARA SAH DAN TIDAK SAH</h1>

                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th class="px-6 py-3">
                                URAIAN
                            </th>
                            <th class="px-6 py-3">
                                JUMLAH
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 w-full font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                JUMLAH SELURUH SUARA SAH
                            </td>
                            <td width="150" class="px-6 py-3">
                                {{-- masih dihitung berdasarkan list diatas bukan dari data TPS INPUT --}}
                                {{ $jumlahSuaraSah->total_suara_sah ?? '0' }}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 w-full font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                JUMLAH SUARA TIDAK SAH
                            </td>
                            <td width="150" class="px-6 py-3">
                                {{ $jumlahSuaraTidakSah->jumlah_suara_tidak_sah }}
                            </td>
                        </tr>
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="px-6 py-4 w-full font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                JUMLAH SELURUH SUARA SAH DAN SUARA TIDAK SAH
                            </td>
                            <td width="150" class="px-6 py-3">
                                {{ $jumlahSuaraSah->total_suara_sah + $jumlahSuaraTidakSah->jumlah_suara_tidak_sah }}
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>
