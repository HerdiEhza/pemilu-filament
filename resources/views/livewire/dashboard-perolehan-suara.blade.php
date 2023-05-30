<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="flex flex-col p-6 text-gray-900">

                <select wire:model="kategoriPemiluActive" name="kategoriPemiluActive" id="kategoriPemiluActive" class="w-full">
                    @foreach ($kategoriPemilus as $kp)
                        <option value="{{ $kp->id }}">{{ $kp->nama_kategori_pemilu }}</option>
                    @endforeach
                </select>
                {{-- {{ __("You're logged in!") }} --}}


                @forelse ($paslon as $paslonn)
                    {{ $paslonn->nama_pasangan_calon }}
                    {{ $paslonn->kategoriPemilu->nama_kategori_pemilu }}
                    <br>
                    @foreach ($partais as $p)
                        @foreach ($paslonn->nama_partai_id as $np)
                            @if ($p->id == $np)
                                {{ $p->nama_partai }}
                            @endif
                        @endforeach
                    @endforeach
                    @foreach ($perolehanSuara as $test)
                        <div class="flex">
                            @foreach ($test->result as $data)
                            @if ($paslonn->id == $data->id_paslon)
                            {{-- return $data->perolehan_suara->count() --}}
                            {{-- Perolehan Suara: {{ $data->perolehan_suara->array_sum() }} --}}
                            @endif
                            @endforeach
                            {{ array_sum($data->perolehan_suara) }}
                        </div>
                @endforeach
                    {{-- <h1>perolehan suara : </h1> --}}
                    <br>
                    <br>
                @empty

                @endforelse

                {{-- {{ dd($data->perolehan_suara) }} --}}
            </div>
        </div>
    </div>
</div>
