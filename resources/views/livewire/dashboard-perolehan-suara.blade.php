<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <select wire:model="kategoriPemiluActive" id="kategori_pemilu_id" name="kategori_pemilu_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                @foreach ($kategoriPemilus as $kp)
                    <option value="{{ $kp->id }}">{{ $kp->nama_kategori_pemilu }}</option>
                @endforeach
            </select>

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
                    {{-- {{ $perolehanSuara }} --}}
                    {{-- {{ array_sum($data->perolehanSuara['perolehan_suara']) }} --}}
                        {{-- @foreach ($data->perolehanSuara as $hasil)
                            {{ $hasil->perolehan_suara }}
                        @endforeach --}}
                        {{ $data->total_suara ?? 0 }}
                        {{-- {{ $perolehanSuara }} --}}
                </h1>
                <br>
                <br>
            @empty

            @endforelse

        </div>
    </div>
</div>
