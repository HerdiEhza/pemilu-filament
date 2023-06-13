<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Livewire\Component;

class MainDashboard extends Component
{
    public $kategoriPemiluActive;
    public $provinsiActive;
    public $dataDapilActive;
    public $kabKotaActive;
    public $kecamatanActive;
    public $tpsActive;

    public function render()
    {
        return view('livewire.dashboard.dprd-kab.main-dashboard');
    }
}
