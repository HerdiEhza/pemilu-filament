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
                    <button wire:click="$emit('updateList')" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Refresh
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ml-2 -mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 overflow-x-auto border-t border-gray-100">
                    <table class="w-full mt-6 text-sm border-collapse table-auto">
                        <caption class="pt-4 text-xs text-slate-500 dark:text-slate-400 caption-bottom">
                            Table 3.1: Professional wrestlers and their signature moves.
                        </caption>
                        <thead>
                            <tr>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Kategori PEMILU</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Lokasi TPS</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Dibuat</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Diupdate</th>
                                <th class="p-4 pt-0 pb-3 pr-8 font-medium text-center border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Actions</th>
                                <th class="p-4 pt-0 pb-3 pr-8 font-medium text-center border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Status</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            @forelse ($listSuara as $list)
                            <tr>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->kategoriPemilu->nama_kategori_pemilu }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->tps->nama_tps }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->updated_at->diffForHumans() }}</td>
                                <td class="p-4 pr-8 space-x-0 text-center border-b sm:space-x-4 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                    {{-- <a href="{{ route('list-suara.edit', [$list->id]) }}"><button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button></a> --}}
                                    <a href="{{ route('list-suara.view', [$list->id]) }}"><button class="font-medium text-sky-600 dark:text-sky-500 hover:underline">Lihat</button></a>
                                </td>
                                <td class="p-4 pr-8 space-x-0 border-b sm:space-x-4 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                    @if ($list->is_active == true)
                                    <span class="relative inline-flex items-center w-full">
                                        <button wire:click="diaktif({{ $list->id }})" type="button" class="items-center w-full px-4 py-2 text-sm font-semibold leading-6 text-center text-green-500 transition duration-150 ease-in-out bg-white rounded-md shadow dark:bg-slate-800 ring-1 ring-slate-900/10 dark:ring-slate-200/20">
                                            Aktif
                                        </button>
                                        <span class="absolute top-0 right-0 flex w-3 h-3 -mt-1 -mr-1">
                                            <span class="absolute inline-flex w-full h-full bg-green-400 rounded-full opacity-75 animate-ping"></span>
                                            <span class="relative inline-flex w-3 h-3 bg-green-500 rounded-full"></span>
                                        </span>
                                    </span>
                                    @else
                                    <span class="relative inline-flex items-center w-full">
                                        <button wire:click="aktif({{ $list->id }})" type="button" class="items-center w-full px-4 py-2 text-sm font-semibold leading-6 text-center text-gray-500 transition duration-150 ease-in-out bg-white rounded-md shadow dark:bg-slate-800 ring-1 ring-slate-900/10 dark:ring-slate-200/20">
                                            Nonaktif
                                        </button>
                                        <span class="absolute top-0 right-0 flex w-3 h-3 -mt-1 -mr-1">
                                            <span class="absolute inline-flex w-full h-full bg-gray-400 rounded-full opacity-75"></span>
                                            <span class="relative inline-flex w-3 h-3 bg-gray-500 rounded-full"></span>
                                        </span>
                                    </span>
                                    @endif
                                </td>
                            </tr>

                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
