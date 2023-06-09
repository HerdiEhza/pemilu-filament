<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;

class DashboardPerolehanSuara extends Component
{
    public $kategoriPemiluActive = 1;

    protected $listeners = [
        // 'perolehan-suara-submitted' => 'render'
        'updateListSuara' => 'render'
        // '$refresh'
    ];

    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->withSum('perolehanSuara as total_suara', 'perolehan_suara')->get();
        $partais = DataPartai::all();

        return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'kategoriPemilus'));
    }
}
