<div class="flex flex-col p-4 space-y-4">

    <select wire:model="kategori_pemilu_id">
        <option value="">Pilih Ktegori</option>
        @foreach ($kategoriP as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori_pemilu }}</option>
        @endforeach
    </select>

    @foreach ($paslons as $ps)
    <div>
        {{ $ps->nama_pasangan_calon }}
    </div>
    <div class="grid grid-cols-3">
        <input wire:model.lazy="result.{{ $ps->id }}.pasangan_calon_id"
            type="number" name="pasangan_calon_id" id="pasangan_calon_id"
            class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
        >
        <input wire:model.lazy="result.{{ $ps->id }}.nama_paslon"
            type="text" name="nama_paslon" id="nama_paslon"
            class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
        >
        <input wire:model.lazy="result.{{ $ps->id }}.perolehan_suara"
            type="number" name="perolehan_suara" id="perolehan_suara"
            class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
        >
    </div>
    @endforeach

    <div class="flex w-full">
        <button
            class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-green-500 border rounded select-none hover:bg-green-600 pull-right"
            wire:click.prevent="dump" type="button">
            dump data!
        </button>
        <button
            class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-green-500 border rounded select-none hover:bg-green-600 pull-right"
            wire:click.prevent="submitForm" type="button">
            Finish!
        </button>
    </div>

</div>
