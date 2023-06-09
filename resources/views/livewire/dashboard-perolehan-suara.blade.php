<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="flex justify-between">
                <select wire:model="kategoriPemiluActive" id="kategori_pemilu_id" name="kategori_pemilu_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                    @foreach ($kategoriPemilus as $kp)
                        <option value="{{ $kp->id }}">{{ $kp->nama_kategori_pemilu }}</option>
                    @endforeach
                </select>

                <button wire:click="$emit('updateListSuara')" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Refresh
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 -mr-1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                    </svg>
                </button>
            </div>

            @forelse ($paslon as $data)
                {{ $data->nama_pasangan_calon }}
                {{ $data->kategoriPemilu->nama_kategori_pemilu }}
                <br>
                @foreach ($partais as $p)
                    @if (is_array($data->nama_partai_id))
                        @foreach ($data->nama_partai_id as $np)
                            @if ($p->id == $np)
                                {{ $p->nama_partai }} <br/>
                            @endif
                        @endforeach
                    @else
                        @if ($p->id == $data->nama_partai_id)
                            {{ $p->nama_partai }}
                        @endif
                    @endif
                @endforeach
                <h1>
                    perolehan suara :
                    {{ $data->total_suara ?? 0 }}
                </h1>
                <br>
                <br>
            @empty

            @endforelse

        </div>
    </div>
</div>
