<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Livewire\Component;

class ProvinsiDashboard extends Component
{
    public $kategoriPemiluActive;
    public $dataDapilActive;
    public $provinsiActive;
    public $kabKotaActive;
    public $kecamatanActive;
    public $tpsActive;

    public function render()
    {
        return view('livewire.dashboard.dprd-kab.provinsi-dashboard');
    }
}
