<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            {{-- {{ dd($suaras) }} --}}
            <ul class="flex justify-around py-4 text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400">
                <li class="w-full">
                    <a href="{{ route('dashboard') }}" aria-current="page" class="w-full flex p-4 text-blue-600 bg-gray-100 rounded-t-lg active dark:bg-gray-800 dark:text-blue-500">Per DAPIL</a>
                </li>
                <li class="w-full">
                    <a href="{{ route('dashboard.per-wilayah') }}" class="w-full flex p-4 rounded-t-lg hover:text-gray-600 hover:bg-gray-50 dark:hover:bg-gray-800 dark:hover:text-gray-300">Per Wilayah</a>
                </li>
            </ul>

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">
                <div class="text-center py-4">
                    <h2 class="font-semibold">HASIL HITUNG SUARA PEMILU LEGISLATIF DPRD KAB/KOTA 2024</h2>
                    <p>WILAYAH PEMILIHAN KOTA PONTIANAK - PROV. KALIMANTAN BARAT</p>
                    <p>DAPIL ...</p>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    @forelse ($partais as $partai)

                    <div class="border-4 px-4 py-2 border-gray-500">
                        <div class="flex gap-x-4 border-b py-4 items-center">
                            <div class="max-w-sm flex items-center">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->id }}</p>
                            </div>
                            <img class="h-12 w-12 flex-none bg-gray-50"
                                src="https://th.bing.com/th/id/OIP.sGcwi0Tb3Nm3WvDzjrLR4QHaIf?pid=ImgDet&rs=1"
                                alt="">
                            <div class="min-w-0 flex items-center">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->nama_partai }}</p>
                            </div>
                        </div>
                        <ul role="list" class="divide-y divide-gray-100">
                            @forelse ($paslons as $paslon)
                                @if ($partai->id == $paslon->nama_partai_id)
                                <li class="flex justify-between gap-x-6 py-2">
                                    <div class="flex gap-x-2">
                                        <p class="text-sm first-letter:font-semibold leading-6 text-gray-900">{{ $paslon->nomor_urut }}</p>
                                        <p class="text-sm text-start font-semibold leading-6 text-gray-900">{{ $paslon->nama_pasangan_calon }}</p>
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
