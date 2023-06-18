<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerWilayah;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\IndonesiaVilages;

class Kec extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive;
    public $kabKotaActives;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive = 63;

    public $kelurahans;
    public $suaras;
    public $partais;

    function mount(Request $request)
    {
        $getUrl = explode('/',  $request->path());
        $this->provinsiActive = $getUrl[2];
        $this->kabKotaActive = $getUrl[3];
        $this->kecamatanActive = end($getUrl);

        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->kelurahans = IndonesiaVilages::where('indonesia_districts_id', $this->kecamatanActive)->get();
        $this->partais = DataPartai::all();
        $this->suaras = DB::table('tps_results')
        ->select('tps_kel_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('tps_kel_id, data_partai_id')
        ->get();
    }

    public function render()
    {
        return view('livewire.dashboard.dprd-kab.per-wilayah.kec');
    }
}
