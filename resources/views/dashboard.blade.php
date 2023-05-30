<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}


                    @forelse ($paslon as $data)
                        {{ $data->nama_pasangan_calon }}
                        {{ $data->kategoriPemilu->nama_kategori_pemilu }}
                        <br>
                        @foreach ($partais as $p)
                            @foreach ($data->nama_partai_id as $np)
                                @if ($p->id == $np)
                                    {{ $p->nama_partai }}
                                @endif
                            @endforeach 
                        @endforeach
                        <br>
                        <br>
                    @empty
                        
                    @endforelse

                    {{-- {{ dd($np) }} --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
