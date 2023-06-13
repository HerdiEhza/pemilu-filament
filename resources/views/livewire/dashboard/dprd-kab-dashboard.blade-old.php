<div class="grid w-full grid-cols-3 gap-4">

    @forelse ($partais as $p)
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase border-b bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th colspan="2" class="px-6 py-3 text-center">
                        {{ $p->nama_partai }}
                    </th>
                </tr>
            </thead>
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nama Paslon
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Perolehan Suara
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($allItems as $data)
                    @if ($p->id == $data->nama_partai_id)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                {{ $data->nama_pasangan_calon }}
                            </td>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $data->total_suara ?? 0 }}
                            </th>
                        </tr>
                @endif
                @endforeach
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4">
                        Total Perolehan Suara
                    </td>
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $data->total_suara ?? 0 }}
                    </th>
                </tr>
            </tbody>
        </table>

    {{--  @foreach ($allItems as $test)
        @if ($p->id == $test->nama_partai_id)

        @endif
        @endforeach --}}
    @empty

    @endforelse

    {{-- @foreach ($allItems as $user)
        <div>
            <p>{{ $user->nama_pasangan_calon }}</p>
            <p>{{ $user->total_suara ?? 0 }}</p>
        </div>
    @endforeach --}}

</div>
