<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerWilayah;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaProvinces;

class Master extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive;
    public $kabKotaActives;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive = 63;

    public $provinsis;
    public $suaras;
    public $partais;

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->provinsis = IndonesiaProvinces::all();
        $this->partais = DataPartai::all();
        $this->suaras = DB::table('tps_results')
        ->select('tps_provinsi_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('tps_provinsi_id, data_partai_id')
        ->get();

        $getUrl = explode('/',  $request->path());
        // $this->kabKotaActive = end($getUrl);
    }

    function updated() : void {
        // $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    public function updatedprovinsiActive($value)
    {
        $this->provinsis = DataDapil::where('cities_id', $value)->get();

        $this->suaras = DB::table('tps_results')
        ->select('tps_provinsi_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('tps_provinsi_id, data_partai_id')
        ->get();
    }

    public function render()
    {
        return view('livewire.dashboard.dprd-kab.per-wilayah.master');
    }
}
