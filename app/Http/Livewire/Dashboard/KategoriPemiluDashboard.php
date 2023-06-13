<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;

class KategoriPemiluDashboard extends Component
{
    public $kategoriPemiluActive;
    public $kategoriDataActive;
    public $kategoriDaerahActive;
    public $provinsiActive;
    public $dataDapilActive;
    public $kabKotaActive;
    public $kecamatanActive;

    protected $listeners = [
        'updateListDashboard' => 'render'
    ];

    protected $queryString = [
        'kategoriPemiluActive',
        'kategoriDataActive' => ['except' => 1],
        'kategoriDaerahActive'=> ['except'=>''],
        'provinsiActive' => ['except'=>''],
        'dataDapilActive' => ['except'=>''],
        'kabKotaActive' => ['except'=>''],
        'kecamatanActive' => ['except'=>''],
    ];

    function updated() : void {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

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

        $provinsis = IndonesiaProvinces::all();
        $kabkotas = IndonesiaCities::where('indonesia_provinces_id', $this->provinsiActive)->get();
        $kecamatans = IndonesiaDistricts::where('indonesia_cities_id', $this->kabKotaActive)->get();

        return view('livewire.dashboard.kategori-pemilu-dashboard', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'provinsis', 'kabkotas', 'kecamatans'));
    }
}
