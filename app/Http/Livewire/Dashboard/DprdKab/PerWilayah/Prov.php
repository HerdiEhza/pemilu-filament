<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerWilayah;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaProvinces;

class Prov extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive;
    public $kabKotaActives;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive = 63;

    public $kabKotas;
    public $suaras;
    public $partais;

    function mount(Request $request)
    {
        $getUrl = explode('/',  $request->path());
        $this->provinsiActive = end($getUrl);

        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->kabKotas = IndonesiaCities::where('indonesia_provinces_id', $this->provinsiActive)->get();
        $this->partais = DataPartai::all();
        $this->suaras = DB::table('tps_results')
        ->select('tps_kab_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('tps_kab_id, data_partai_id')
        ->get();
    }

    public function render()
    {
        return view('livewire.dashboard.dprd-kab.per-wilayah.prov');
    }
}
