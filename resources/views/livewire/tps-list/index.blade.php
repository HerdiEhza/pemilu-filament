<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <div class="overflow-x-auto">
                    <table class="w-full text-sm border-collapse table-auto">
                        <caption class="pt-4 text-xs text-slate-500 dark:text-slate-400 caption-bottom">
                            Table 3.1: Professional wrestlers and their signature moves.
                        </caption>
                        <thead>
                            <tr>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Kategori PEMILU</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Lokasi TPS</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Dibuat</th>
                                <th class="p-4 pt-0 pb-3 pl-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Diupdate</th>
                                <th class="p-4 pt-0 pb-3 pr-8 font-medium text-left border-b dark:border-slate-600 text-slate-400 dark:text-slate-200">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            @forelse ($listSuara as $list)
                            <tr>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->kategoriPemilu->nama_kategori_pemilu }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->tps->nama_tps }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->created_at->isoFormat('dddd, D MMMM Y') }}</td>
                                <td class="p-4 pl-8 border-b border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">{{ $list->updated_at->diffForHumans() }}</td>
                                <td class="p-4 pr-8 space-x-0 border-b sm:space-x-4 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">
                                    <a href="{{ route('list-suara.edit', [$list->id]) }}"><button class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button></a>
                                    <a href="{{ route('list-suara.view', [$list->id]) }}"><button class="font-medium text-green-600 dark:text-green-500 hover:underline">View</button></a>
                                </td>
                            </tr>

                            {{-- @foreach ($list->hasil as $hasil)
                            {{ $hasil->pasangan_calon_id }}
                            @endforeach --}}
                            @empty

                            @endforelse
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
