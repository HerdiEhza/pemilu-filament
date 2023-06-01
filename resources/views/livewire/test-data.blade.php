<div class="flex p-4 space-x-4">

    @for ($i = 0; $i < 2; $i++)
        <input wire:model="result.{{ $i }}.paslon_id" type="number" name="paslon_id" id="paslon_id" class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
        <input wire:model="result.{{ $i }}.nama_paslon" type="number" name="nama_paslon" id="nama_paslon" class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
        <input wire:model="result.{{ $i }}.kategori_pemilu_id" type="number" name="kategori_pemilu_id" id="kategori_pemilu_id" class="text-center block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
    @endfor

    <button
        class="inline-block px-4 py-3 text-xl font-normal leading-tight text-center text-white no-underline whitespace-no-wrap align-middle bg-green-500 border rounded select-none hover:bg-green-600 pull-right"
        wire:click.prevent="submitForm"
        type="button"
    >
        Finish!
    </button>

    {{-- {{ dd($this->result) }} --}}
</div>
