<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\DataTps;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\IndonesiaVilages;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;

class MasterDashboard extends Component
{
    public $kategoriPemiluActive;
    // public $kategoriDataActive;
    // public $kategoriDaerahActive = 1;
    public $provinsiActive = 1;
    public $kabKotaActive = 0;
    public $kecamatanActive = 0;
    public $kelurahanActive = 0;
    public $tpsActive;
    public $dataDapilActive;

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
        $kelurahans = IndonesiaVilages::where('indonesia_districts_id', $this->kecamatanActive)->get();
        $tpsList = DataTps::where('kelurahan_desa_id', $this->kelurahanActive)->get();

        return view('livewire.dashboard.master-dashboard', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'provinsis', 'kabkotas', 'kecamatans', 'kelurahans', 'tpsList'));
    }
}
