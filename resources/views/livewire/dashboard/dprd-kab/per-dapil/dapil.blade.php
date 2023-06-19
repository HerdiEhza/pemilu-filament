<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            {{-- {{ dd($suaras) }} --}}
            <ul class="flex justify-around py-4 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="w-full">
                    <a href="{{ route('dashboard') }}" aria-current="page" class="flex w-full p-4 text-white bg-blue-400 rounded-t-lg hover:bg-blue-500 active dark:bg-gray-800 dark:text-blue-500">Per DAPIL</a>
                </li>
                <li class="w-full">
                    <a href="{{ route('dashboard.per-wilayah') }}" class="flex w-full p-4 bg-gray-100 rounded-t-lg hover:text-gray-600 hover:bg-gray-200 dark:hover:bg-gray-800 dark:hover:text-gray-300">Per Wilayah</a>
                </li>
            </ul>

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">
                <div class="py-4 text-center">
                    <h2 class="font-semibold">HASIL HITUNG SUARA PEMILU LEGISLATIF DPRD KAB/KOTA 2024</h2>
                    <p>WILAYAH PEMILIHAN KOTA PONTIANAK - PROV. KALIMANTAN BARAT</p>
                    <p>DAPIL ...</p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    @forelse ($partais as $partai)

                    <div class="px-4 py-2 border-4 border-gray-500">
                        <div class="flex items-center py-4 border-b gap-x-4">
                            <div class="flex items-center max-w-sm">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->id }}</p>
                            </div>
                            <img class="flex-none w-12 h-12 bg-gray-50"
                                src="https://th.bing.com/th/id/OIP.sGcwi0Tb3Nm3WvDzjrLR4QHaIf?pid=ImgDet&rs=1"
                                alt="">
                            <div class="flex items-center min-w-0">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->nama_partai }}</p>
                            </div>
                        </div>
                        <ul role="list" class="divide-y divide-gray-100">
                            @forelse ($paslons as $paslon)
                                @if ($partai->id == $paslon->nama_partai_id)
                                <li class="flex justify-between py-2 gap-x-6">
                                    <div class="flex gap-x-2">
                                        <p class="text-sm leading-6 text-gray-900 first-letter:font-semibold">{{ $paslon->nomor_urut }}</p>
                                        <a href="{{ route('dashboard.per-dapil-paslon', ['dapil' => $this->dataDapilActive, 'partai' => $partai->id, 'paslon' => $paslon->id]) }}" class="text-sm font-semibold leading-6 text-gray-900 text-start">{{ $paslon->nama_pasangan_calon }}</a>
                                    </div>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                        @foreach ($suaras as $suara)
                                            @if ($paslon->id == $suara->pasangan_calon_id)
                                            <p class="text-sm leading-6 text-gray-900">{{ $suara->total_suara }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </li>
                                @endif
                            @empty

                            @endforelse
                        </ul>
                    </div>

                    @empty

                    @endforelse

                </div>
            </div>

        </div>
    </div>
</div>
