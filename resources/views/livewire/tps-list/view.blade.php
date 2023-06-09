<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <div class="flex items-center justify-between w-full px-4 sm:px-0">
                    <div>
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Input Suara PEMILU</h3>
                        <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Sebelum lanjut pastikan data
                            dibawah sesuai dengan identitas Anda.</p>
                    </div>
                    <a href="{{ route('list-suara.index') }}">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Kembali
                            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 -mr-1">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                            </svg>
                        </button>
                    </a>
                </div>
                <div class="mt-6 border-t border-gray-100">
                    <div class="mt-6">
                        {{ $tpsInputData->kategoriPemilu->nama_kategori_pemilu }}
                        {{ $tpsInputData->tps->nama_tps }}
                    </div>

                    <ul role="list" class="divide-y divide-gray-100">
                        @forelse ($tpsInputData->hasil as $result)
                        <li class="flex justify-between py-5 gap-x-6">
                            <div class="flex gap-x-4">
                                <img class="flex-none w-12 h-12 rounded-full bg-gray-50"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div class="flex-auto min-w-0">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $result->nama_pasangan_calon }}</p>
                                    <p class="hidden mt-1 text-xs leading-5 text-gray-500 truncate sm:block">
                                        Diinput pada {{ $result->created_at->isoFormat('dddd, D MMMM Y') }}
                                    </p>
                                    <p class="block mt-1 text-xs leading-5 text-gray-500 truncate sm:hidden">
                                        {{ $result->perolehan_suara }} Suara
                                    </p>
                                </div>
                            </div>
                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                <p class="text-sm leading-6 text-gray-900">{{ $result->perolehan_suara }} Suara</p>
                                <p class="mt-1 text-xs leading-5 text-gray-500">
                                    Terakhir diupdate {{ $result->updated_at->diffForHumans() }}
                                </p>
                            </div>
                        </li>
                        @empty

                        @endforelse
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
