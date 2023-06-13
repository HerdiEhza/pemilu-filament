<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    @if (!$this->kabKotaActive == null)
        @livewire('dashboard.dprd-kab.kab-kota-dashboard', [
            'kategoriPemiluActive' => $this->kategoriPemiluActive,
            'provinsiActive' => $this->provinsiActive,
            'dataDapilActive' => $this->dataDapilActive,
            'kabKotaActive' => $this->kabKotaActive,
            'kecamatanActive' => $this->kecamatanActive,
            ], key('dprd-prov-kab-kota-'.$this->provinsiActive))
    @else
    @endif
</div>
