<div class="flex justify-between px-4 mx-auto space-x-4">
    @if ($this->kabKotaActive == 0)
        <ul>
            @forelse ($kabKota as $kk)
                <li>{{ $kk->name }}</li>
            @empty
            @endforelse
        </ul>
    @endif
    @if (!$this->kabKotaActive == 0)
        <ul>
            @forelse ($kecamatan as $kecam)
                <li>{{ $kecam->name }}</li>
            @empty
            @endforelse
        </ul>
    @endif
</div>