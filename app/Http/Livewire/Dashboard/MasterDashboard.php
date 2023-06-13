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

class MasterDashboard extends Component
{
    public $kategoriPemiluActive;
    // public $kategoriDataActive;
    // public $kategoriDaerahActive = 1;
    public $provinsiActive;
    public $dataDapilActive;
    public $kabKotaActive;
    public $kecamatanActive;
    public $tpsActive;

    protected $listeners = [
        'updateListDashboard' => 'render'
    ];

    protected $queryString = [
        'kategoriPemiluActive' => ['as' => 'kategori-pemilu'],
        // 'kategoriDataActive' => ['except' => 1, 'as' => 'data'],
        // 'kategoriDaerahActive'=> ['except'=>'', 'as' => 'daerah'],
        // 'provinsiActive' => ['except'=>''],
        // 'dataDapilActive' => ['except'=>''],
        // 'kabKotaActive' => ['except'=>''],
        // 'kecamatanActive' => ['except'=>''],
    ];

    function mount()
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    function updated() : void {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        // if($this->kategoriDaerahActive == 1)
        // {
        //     // $this->dataDapilActive = null;
        //     $this->kecamatanActive = null;
        // }
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

        return view('livewire.dashboard.master-dashboard', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'provinsis', 'kabkotas', 'kecamatans'));
    }
}
