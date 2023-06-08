<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">

                <div class="flex  {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
                    <div class="w-full">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-base font-semibold leading-7 text-gray-900">Input Suara PEMILU</h3>
                            <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Sebelum lanjut pastikan data
                                dibawah sesuai dengan identitas Anda.</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                            <dl class="divide-y divide-gray-100">
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ Auth::user()->name }}
                                    </dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Nama TPS</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ Auth::user()->tps->nama_tps }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Nomor KTP</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ Auth::user()->nomor_ktp }}</dd>
                                </div>
                                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                    <dt class="text-sm font-medium leading-6 text-gray-900">Nomor HP</dt>
                                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                        {{ Auth::user()->nomor_hp }}</dd>
                                </div>
                            </dl>
                        </div>
                        <div class="flex mt-6 space-x-4">
                            <button
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                wire:click="firstStepSubmit" type="button"
                            >
                                Lanjut
                            </button>
                        </div>
                    </div>
                </div>

                <div class=" {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
                    <div class="w-full">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-base font-semibold leading-7 text-gray-900">Input Suara PEMILU</h3>
                            <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Pilih Kategori PEMILU yang akan Anda input.</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <label class="text-sm font-medium leading-6 text-gray-900" for="kategori_pemilu_id">Kategori PEMILU:</label>
                            </div>
                            <select wire:model="kategori_pemilu_id" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <option value="">Pilih Kategori</option>
                                @foreach ($kategoriP as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kategori_pemilu }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex mt-6 space-x-4">
                            <button
                                class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                                type="button" wire:click="back(1)"
                            >
                                Kembali
                            </button>
                            <button
                                class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                wire:click="secondStepSubmit" type="button"
                            >
                                Lanjut
                            </button>
                        </div>
                    </div>
                </div>

                <div class=" {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
                    <div class="w-full">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-base font-semibold leading-7 text-gray-900">Input Suara PEMILU</h3>
                            <p class="max-w-2xl mt-1 text-sm leading-6 text-gray-500">Pilih Kategori PEMILU yang akan Anda input.</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100">
                            <div class="content-start px-4 py-6 space-y-4 sm:space-y-0 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0 justify-items-stretch">
                                @forelse ($paslons as $ps)
                                    <div class="flex flex-col justify-between w-full h-full bg-white rounded shadow justify-self-start">
                                        <div class="flex flex-col items-center w-full pt-4 space-y-4 bg-white">
                                            <p class="text-xs font-light text-center text-gray-400">{{ $ps->kategoriPemilu->nama_kategori_pemilu }}</p>
                                            <img class="rounded-full w-14 h-14" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                                        </div>
                                        <div class="top-0 flex flex-col p-2">
                                            <h1 class="text-center text-gray-800">{{ $ps->nama_pasangan_calon }}</h1>
                                            @foreach ($partais as $p)
                                                @if (is_array($ps->nama_partai_id))
                                                    @foreach ($ps->nama_partai_id as $np)
                                                        @if ($p->id == $np)
                                                            <p class="text-xs font-light text-center text-gray-400">{{ $p->nama_partai }}</p>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    @if ($p->id == $ps->nama_partai_id)
                                                        <p class="text-xs font-light text-center text-gray-400">{{ $p->nama_partai }}</p>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="relative flex items-center justify-center p-2 mt-2">
                                            <input value="{{ $ps->id }}" type="hidden" name="pasangan_calon_id"
                                                id="pasangan_calon_id"
                                                class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                            <input value="{{ $ps->nama_pasangan_calon }}" type="hidden" name="nama_pasangan_calon"
                                                id="nama_pasangan_calon"
                                                class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                            {{-- <input wire:model.lazy="result.{{ $ps->id }}.perolehan_suara" type="number"
                                                name="perolehan_suara" id="perolehan_suara"
                                                class="bottom-0 text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"> --}}
                                            <x-inputs.number wire:model.lazy="result.{{ $ps->id }}.perolehan_suara" type="number" class="!w-full"
                                                name="perolehan_suara" id="perolehan_suara" />
                                        </div>
                                    </div>
                                    @empty
                                    <div class="relative w-full h-64 col-span-3 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl sm:my-8">                                        <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                                        <div class="flex flex-col items-center text-center">
                                            <div class="flex items-center justify-center flex-shrink-0 w-20 h-20 mx-auto bg-red-100 rounded-full sm:mx-0">
                                            <svg class="text-red-600 w-14 h-14" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                            </svg>
                                            </div>
                                            <div class="mt-6 text-center">
                                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Uppss...!</h3>
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">Maaf list Pasangan Calon tidak dapat ditampilkan, harap hubungi Admin!</p>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>

                        <div class="flex mt-6 space-x-4">
                            <button
                                class="flex w-full justify-center rounded-md bg-gray-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600"
                                type="button" wire:click="back(2)"
                            >
                                Kembali
                            </button>
                            <button wire:click.prevent="submitForm"
                                class="@empty($ps) hidden @endempty flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                type="button"
                            >
                                Submit!
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
