<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="justify-center overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <div class="relative p-4 overflow-x-auto shadow-md sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4">
                    @forelse ($partais as $partai)

                    <div class="border-4 px-4 py-2 border-gray-500">
                        <div class="flex gap-x-4 border-b py-4 items-center">
                            <div class="max-w-sm flex items-center">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->id }}</p>
                            </div>
                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                            <div class="min-w-0 flex items-center">
                                <p class="font-semibold leading-6 text-gray-900">{{ $partai->nama_partai }}</p>
                            </div>
                        </div>
                        <ul role="list" class="divide-y divide-gray-100">
                            @forelse ($paslons as $paslon)
                                @if ($partai->id == $paslon->nama_partai_id)
                                <li class="flex justify-between gap-x-6 py-2">
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $paslon->nama_pasangan_calon }}</p>
                                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                                        <p class="text-sm leading-6 text-gray-900">jumlah_suara</p>
                                    </div>
                                </li>
                                @endif
                            @empty

                            @endforelse
                        </ul>
                    </div>

                    @empty

                    @endforelse


                </div>
            </div>

        </div>
    </div>
</div>
