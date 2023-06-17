<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Illuminate\Http\Request;
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

use Illuminate\Support\Facades\DB;

class Kec extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;
    
    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;

        $getUrl = explode('/',  $request->path());
        // dd($getUrl);
        $this->kabKotaActive = $getUrl[1];
        $this->kecamatanActive = end($getUrl);
    }

    public function render()
    {
        $partais = DataPartai::all();
        $kelurahans = IndonesiaVilages::where('indonesia_districts_id', $this->kecamatanActive)->get();

        $hasil = DB::table('tps_results')
            ->select('tps_kel_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            // ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_kel_id', $this->kelurahanActive)
            ->groupByRaw('tps_kel_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();

        return view('livewire.dashboard.dprd-kab.kec', compact(
            'partais',
            'kelurahans',
            'hasil'
        ));
    }
}
