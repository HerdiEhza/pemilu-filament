<div>
    @if (!$this->provinsiActive == null)
        @livewire('dashboard.dprd-kab.provinsi-dashboard', [
            'kategoriPemiluActive' => $this->kategoriPemiluActive,
            'kategoriDataActive' => $this->kategoriDataActive,
            'provinsiActive' => $this->provinsiActive,
            'dataDapilActive' => $this->dataDapilActive,
            'kabKotaActive' => $this->kabKotaActive,
            'kecamatanActive' => $this->kecamatanActive,
            ], key($this->kategoriPemiluActive))
    @endif
    @if($this->provinsiActive == null)
    <p>master view</p>
    @endif
</div>
