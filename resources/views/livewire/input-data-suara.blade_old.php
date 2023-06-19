<div>
    @if(!empty($successMsg))
    <div class="relative px-3 py-3 mb-4 text-green-800 bg-green-200 border border-green-300 rounded">
        {{ $successMsg }}
    </div>
    @endif
    <div class="">
        <div class="flex justify-around py-4">
            <div class="multi-wizard-step">
                <a href="#step-1" type="button"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline {{ $currentStep != 1 ? 'btn-default' : 'bg-blue-600 text-white hover:bg-blue-600' }}">1</a>
                <p>Step 1</p>
            </div>
            <div class="multi-wizard-step">
                <a href="#step-2" type="button"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline {{ $currentStep != 2 ? 'btn-default' : 'bg-blue-600 text-white hover:bg-blue-600' }}">2</a>
                <p>Step 2</p>
            </div>
            {{-- <div class="multi-wizard-step">
                <a href="#step-3" type="button"
                    class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline {{ $currentStep != 3 ? 'btn-default' : 'bg-blue-600 text-white hover:bg-blue-600' }}"
                    disabled="disabled">3</a>
                <p>Step 3</p>
            </div> --}}
        </div>
    </div>

    <div class="flex  {{ $currentStep != 1 ? 'hidden' : '' }}" id="step-1">
        <div class="pl-4 pr-4 md:w-full">
            <div class="mb-4">
                {{-- <input type="hidden" wire:model="user_id" class="block w-full px-2 py-1 mb-1 text-base leading-normal text-gray-800 bg-white border border-gray-200 rounded appearance-none" id="taskTitle"> --}}

                {{-- <input type="hidden" id="user_id" name="user_id" wire:model.defer="user_id"> --}}

                <label for="kategori_pemilu_id">Kategori PEMILU:</label>
                {{-- <input type="text" wire:model="kategori_pemilu_id"
                    class="block w-full px-2 py-1 mb-1 text-base leading-normal text-gray-800 bg-white border border-gray-200 rounded appearance-none"
                    id="taskTitle"> --}}

                <select wire:model="kategori_pemilu_id" name="kategori_pemilu_id" id="kategori_pemilu_id">
                    <option value="">Pilih kategori PEMILU</option>
                    @forelse ($kategoriPemilus as $kaPem)
                        <option value="{{ $kaPem->id }}">{{ $kaPem->nama_kategori_pemilu }}</option>
                    @empty

                    @endforelse
                </select>
                @error('kategori_pemilu_id') <span class="error">{{ $message }}</span> @enderror
            </div>
            <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-blue-600 border rounded select-none hover:bg-blue-600 nextBtn pull-right"
                wire:click="firstStepSubmit" type="button">Next</button>
        </div>
    </div>
    <div class="flex  {{ $currentStep != 2 ? 'hidden' : '' }}" id="step-2">
        <div class="pl-4 pr-4 md:w-full">
            <div class="grid grid-cols-2 gap-4 mt-4">
            <form >
                @csrf
                @forelse ($fetchPaslon as $pasangan)
                    <div class="bg-white rounded shadow">
                        <div class="flex flex-col items-center w-full pt-4 bg-white">
                            <img class="rounded-full w-14 h-14" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60" alt="">
                        </div>
                        <div class="flex flex-col items-center p-2">
                            <h1 class="text-center text-gray-800">{{ $pasangan->nama_pasangan_calon }}</h1>
                            <p class="text-xs font-light text-center text-gray-400">{{ $pasangan->kategoriPemilu->nama_kategori_pemilu }}</p>
                            @foreach ($fetchPartai as $p)
                                @foreach ($pasangan->data_partai_id as $np)
                                    @if ($p->id == $np)
                                        {{ $p->nama_partai }}
                                    @endif
                                @endforeach
                            @endforeach
                            {{-- @foreach ($pasangan->partais as $key => $entry)
                            <span class="inline-block whitespace-nowrap rounded-full bg-neutral-50 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-neutral-600">
                                {{ $entry->nama_partai }}
                            </span>
                            @endforeach --}}
                            <div class="inline-flex items-center mt-2">
                                <input wire:model="result.{{ $pasangan->id }}" type="hidden" name="paslon_id" id="paslon_id">
                                <input wire:model="result.{{ $pasangan->id }}.id_paslon" type="number" name="id_paslon" id="id_paslon" class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                                <input wire:model="result.{{ $pasangan->id }}.perolehan_suara" type="number" name="perolehan_suara" id="perolehan_suara" class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse
            </form>
            </div>

            {{-- <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-blue-600 border rounded select-none hover:bg-blue-600 nextBtn pull-right"
                type="button" wire:click="secondStepSubmit">Next</button> --}}
            <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-green-500 border rounded select-none hover:bg-green-600 pull-right"
                wire:click="submitForm" type="button">Finish!</button>
            <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-red-600 border rounded select-none hover:bg-red-700 nextBtn pull-right"
                type="button" wire:click="back(1)">Back</button>
        </div>
    </div>
    {{-- <div class="flex  {{ $currentStep != 3 ? 'hidden' : '' }}" id="step-3">
        <div class="pl-4 pr-4 md:w-full">
            <h3> Step 3</h3>
            <table class="w-full max-w-full mb-4 bg-transparent">
                <tr>
                    <td>Team Name:</td>
                    <td><strong>{{$user_id}}</strong></td>
                </tr>
                <tr>
                    <td>Team Price:</td>
                    <td><strong>{{$kategori_pemilu_id}}</strong></td>
                </tr>
                <tr>
                    <td>Team status:</td>
                    <td><strong>{{$status ? 'Active' : 'DeActive'}}</strong></td>
                </tr>
                <tr>
                    <td>Team Detail:</td>
                    <td><strong>{{$detail}}</strong></td>
                </tr>
            </table>
            <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-green-500 border rounded select-none hover:bg-green-600 pull-right"
                wire:click="submitForm" type="button">Finish!</button>
            <button
                class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-red-600 border rounded select-none hover:bg-red-700 nextBtn pull-right"
                type="button" wire:click="back(2)">Back</button>
        </div>
    </div> --}}
</div>
