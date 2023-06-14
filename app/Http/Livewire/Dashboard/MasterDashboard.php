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

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MasterDashboard extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;

    public $currentUrl;

    protected $listeners = [
        'updateListDashboard' => 'render'
    ];

    protected $queryString = [
        // 'kategoriPemiluActive' => ['except' => '0', 'as' => 'kp'],
        // 'provinsiActive' => ['except' => '0', 'as' => 'prov'],
        // 'kabKotaActive' => ['except' => '0', 'as' => 'kab'],
        // 'kecamatanActive' => ['except' => '0', 'as' => 'kec'],
        // 'kelurahanActive' => ['except' => '0', 'as' => 'kel'],
    ];

    function mount()
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->currentUrl = url()->current();
    }

    function updated() : void {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    function resetDashboard()
    {
        $this->emit('updateListDashboard');
        $this->provinsiActive = null;
        $this->kabKotaActive = null;
        $this->kecamatanActive = null;
        $this->kelurahanActive = null;
        $this->tpsActive = null;
    }

    function reloadListDashboard()
    {
        $this->emit('updateListDashboard');
    }

    public function render()
    {
        $partais = DataPartai::all();
        $kabkotas = IndonesiaCities::where('indonesia_provinces_id', $this->provinsiActive)->get();

        $hasil = DB::table('tps_results')
            ->select('tps_kab_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('tps_kab_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();

        return view('livewire.dashboard.master-dashboard', compact(
            'partais',
            'kabkotas',
            'hasil',
        ));
    }
}
