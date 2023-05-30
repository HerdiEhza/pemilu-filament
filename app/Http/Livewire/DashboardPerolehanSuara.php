<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\PerolehanSuara;

class DashboardPerolehanSuara extends Component
{
    public $kategoriPemiluActive = 1;

    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get();
        $partais = DataPartai::all();

        $getPerolehanSuara = PerolehanSuara::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get('result');
        $decodePerolehanSuara = json_decode($getPerolehanSuara);
        $perolehanSuara = $decodePerolehanSuara;

        return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'perolehanSuara', 'kategoriPemilus'));
    }
}
