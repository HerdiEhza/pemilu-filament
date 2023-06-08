<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                {{ $tpsInputData->kategoriPemilu->nama_kategori_pemilu }}
                {{ $tpsInputData->tps->nama_tps }}

                <div class="content-start px-4 py-6 space-y-4 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 justify-items-stretch">
                    @forelse ($tpsInputData->hasil as $resultMount)
                    <div class="flex flex-col justify-between w-full h-full bg-white rounded shadow justify-self-start">
                        <div class="flex flex-col items-center w-full pt-4 space-y-4 bg-white">
                            {{-- <p class="text-xs font-light text-center text-gray-400">{{ $resultMount->kategoriPemilu->nama_kategori_pemilu }}</p> --}}
                            <img class="rounded-full w-14 h-14" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                        </div>
                        <div class="top-0 flex flex-col p-2">
                            <h1 class="text-center text-gray-800">{{ $resultMount->nama_pasangan_calon }}</h1>
                            {{-- @foreach ($partais as $p)
                                @if (is_array($resultMount->nama_partai_id))
                                    @foreach ($resultMount->nama_partai_id as $np)
                                        @if ($p->id == $np)
                                            <p class="text-xs font-light text-center text-gray-400">{{ $p->nama_partai }}</p>
                                        @endif
                                    @endforeach
                                @else
                                    @if ($p->id == $resultMount->nama_partai_id)
                                        <p class="text-xs font-light text-center text-gray-400">{{ $p->nama_partai }}</p>
                                    @endif
                                @endif
                            @endforeach --}}
                        </div>
                        <div class="relative flex items-center justify-center p-2 mt-2">
                            <input value="{{ $resultMount->id }}" type="hidden" name="pasangan_calon_id"
                                id="pasangan_calon_id"
                                class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                            <input value="{{ $resultMount->nama_pasangan_calon }}" type="hidden" name="nama_pasangan_calon"
                                id="nama_pasangan_calon"
                                class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                            {{-- <input wire:model.lazy="result.{{ $resultMount->id }}.perolehan_suara" type="number"
                                name="perolehan_suara" id="perolehan_suara"
                                class="bottom-0 text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"> --}}
                            <x-inputs.number wire:model.lazy="result.{{ $resultMount->id }}.perolehan_suara" type="number" class="!w-full"
                                name="perolehan_suara" id="perolehan_suara" />
                        </div>
                    </div>
                    @empty

                    @endforelse
                    <button wire:click.prevent="submitForm"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        type="button"
                    >
                        Submit!
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>
