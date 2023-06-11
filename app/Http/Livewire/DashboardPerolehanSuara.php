<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TpsResult;

class DashboardPerolehanSuara extends Component
{
    public $kategoriPemiluActive;
    public $dataDapilActive;

    protected $listeners = [
        // 'perolehan-suara-submitted' => 'render'
        'updateListDashboard' => 'render'
        // '$refresh'
    ];

    function reloadListDashboard()
    {
        $this->emit('updateListDashboard');
    }

    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $dapils = DataDapil::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->withSum('perolehanSuara as total_suara', 'perolehan_suara')->get();
        $partais = DataPartai::all();

        $result = TpsResult::select('id', 'nama_pasangan_calon', 'perolehan_suara')->withSum('perolehan_suara')->get();

        return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'result'));
    }
}
