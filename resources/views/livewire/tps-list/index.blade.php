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
                    <button wire:click="reloadList" wire:loading.attr="disabled" wire:loading.class="cursor-progress" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 inline-flex items-center">
                        <div wire:loading wire:target="reloadList">
                            <svg aria-hidden="true" role="status" class="inline w-4 h-4 mr-3 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor"/>
                            </svg>
                            Loading...
                        </div>
                        <div wire:loading.remove wire:target="reloadList">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="inline w-4 h-4 mr-3 text-white ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                            </svg>
                            Refresh
                        </div>
                    </button>
                </div>
                <div class="mt-6 overflow-x-auto border-t border-gray-100">
                    <table class="w-full mt-6 text-sm border-collapse table-auto">
                        <caption class="pt-4 text-xs text-slate-500 dark:text-slate-400 caption-bottom">
                            Tabel List perolehan suara yang telah di input.
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
