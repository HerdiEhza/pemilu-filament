<form wire:submit.prevent="save">
    @csrf
    <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress">
        <!-- File Input -->
        <input type="file" wire:model="photos" multiple>

        <!-- Progress Bar -->
        <div x-show="isUploading">
            <progress max="100" x-bind:value="progress"></progress>
        </div>

        {{-- <div wire:loading wire:target="photos">Uploading...</div> --}}
    </div>

    {{-- <input type="file" wire:model="photos" multiple> --}}

    @error('photos.*') <span class="error">{{ $message }}</span> @enderror

    <button type="submit">Save Photo</button>
</form>

<div class="grid grid-cols-3">
    @forelse ($partais as $partai)
    <div class="flex mt-2">
        <p>{{ $partai->id }}</p>
        <h1>{{ $partai->nama_partai }}</h1>
        <img class="h-8" src="{{ asset('assets/logo-partai/'.$partai->logo_partai) }}" alt="">
    </div>
    @empty

    @endforelse
</div>