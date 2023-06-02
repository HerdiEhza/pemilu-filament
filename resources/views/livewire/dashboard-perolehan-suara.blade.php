<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="flex flex-col p-6 text-gray-900">

                <select wire:model="kategoriPemiluActive" name="kategoriPemiluActive" id="kategoriPemiluActive" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @foreach ($kategoriPemilus as $kp)
                        <option value="{{ $kp->id }}">{{ $kp->nama_kategori_pemilu }}</option>
                    @endforeach
                </select>
                {{-- {{ __("You're logged in!") }} --}}

                <div class="flex flex-col md:grid md:grid-cols-3 gap-4 mt-4">
                    @forelse ($paslon as $paslonn)
                        <div class="w-full">
                            <div class="rounded-lg bg-card flex justify-between p-3 h-32">
                                <div class="">
                                    <div class="flex items-center">
                                        <img src="https://assets.codepen.io/3685267/mock_faces_0.jpg" alt="" class="w-10 h-10 rounded-full">
                                        <div class="ml-2">
                                            <div class="flex items-center">
                                                <div class="mr-2 font-bold text-white">{{ $paslonn->nama_pasangan_calon }}</div>
                                                <img src="https://assets.codepen.io/3685267/res-react-dash-tick.svg" alt="" class="w-4 h-4">
                                            </div>
                                            <div class="text-sm text-white">{{ $paslonn->kategoriPemilu->nama_kategori_pemilu }}</div>
                                        </div>
                                    </div>
                                    {{-- <div class="text-sm  mt-2 text-white">
                                        @foreach ($partais as $p)
                                            @foreach ($paslonn->nama_partai_id as $np)
                                                @if ($p->id == $np)
                                                    {{ $p->nama_partai }}
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </div> --}}
                                    <svg class="w-44 mt-3" height="6" viewBox="0 0 200 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="200" height="6" rx="3" fill="#2D2D2D"></rect>
                                        <rect width="120" height="6" rx="3" fill="url(#paint0_linear)"></rect>
                                        <rect x="38" width="2" height="6" fill="#171717"></rect>
                                        <rect x="78" width="2" height="6" fill="#171717"></rect>
                                        <rect x="118" width="2" height="6" fill="#171717"></rect>
                                        <rect x="158" width="2" height="6" fill="#171717"></rect>
                                        <defs>
                                            <linearGradient id="paint0_linear" x1="0" y1="0" x2="1" y2="0">
                                                <stop stop-color="#8E76EF"></stop>
                                                <stop offset="1" stop-color="#3912D2"></stop>
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="flex flex-col items-center">
                                    <img src="https://assets.codepen.io/3685267/res-react-dash-bull.svg" alt="" class="w-8 h-8">
                                    <div class="text-green-500 font-bold text-lg">
                                        @foreach ($perolehanSuara as $test)
                                            <div class="flex text-whhite">
                                                @foreach ($test->result as $data)
                                                    @if ($paslonn->id == $data->id_paslon)
                                                        {{-- return $data->perolehan_suara->count() --}}
                                                        {{-- {{ $data->perolehan_suara }} --}}
                                                        {{-- @foreach ($data->perolehan_suara as $value)
                                                            {{ $default = $value + $value }}
                                                            {{ $default }}
                                                        @endforeach --}}
                                                    @endif
                                                @endforeach
                                                {{-- {{ array_sum($data->perolehan_suara) }} --}}

                                                
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- <div class="text-sm ">Last 6 month</div> --}}
                                </div>
                            </div>
                        </div>
                    @empty
                </div>

                        {{-- <div class="grid w-full min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8"> --}}
                            <div class="grid w-full place-items-center text-center items-center px-6 py-24 sm:py-32 lg:px-8">
                                <div class="flex items-center justify-center w-16 h-16 text-yellow-500 rounded-full bg-yellow-50 dark:bg-gray-700">
                                    <svg wire:loading.remove.delay="1" wire:target="previousPage,nextPage,gotoPage,sortTable,tableFilters,resetTableFiltersForm,tableSearchQuery,tableColumnSearchQueries,tableRecordsPerPage" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-6 h-6" wire:loading.delay="wire:loading.delay" wire:target="previousPage,nextPage,gotoPage,sortTable,tableFilters,resetTableFiltersForm,tableSearchQuery,tableColumnSearchQueries,tableRecordsPerPage">
                                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
                                    </svg>
                                </div>
                                <h1 class="mt-4 text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">No records found</h1>
                            </div>
                        {{-- </div> --}}
                    @endforelse
                    
                    
                    @foreach ($eja as $mpus)
                    {{-- @if ($paslonn->id == array_keys($mpus)) --}}
                        {{-- {{ $mpus }} --}}
                        @foreach ($mpus as $bbr)
                            {{-- {{ $bbr }} --}}
                        @endforeach
                    {{-- @endif --}}
                @endforeach
                    {{-- @foreach ($bbb as $cc)
                        {{ $cc }}
                    @endforeach --}}
                    {{ dd($newData) }}
                    {{-- {{dd($bbr)}} --}}
                    {{-- {{dd($mpus)}} --}}
            </div>
        </div>
    </div>
</div>
