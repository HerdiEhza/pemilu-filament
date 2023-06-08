<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                {{ $tpsInputData->kategoriPemilu->nama_kategori_pemilu }}
                {{ $tpsInputData->tps->nama_tps }}

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
