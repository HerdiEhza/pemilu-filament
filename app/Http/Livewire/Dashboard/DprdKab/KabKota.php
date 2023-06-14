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

class KabKota extends Component
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
        $this->kabKotaActive = end($getUrl);
    }

    function updated() : void {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    public function render()
    {
        $partais = DataPartai::all();
        $kecamatans = IndonesiaDistricts::where('indonesia_cities_id', $this->kabKotaActive)->get();

        $hasil = DB::table('tps_results')
            ->select('tps_kec_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('tps_kec_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();

        return view('livewire.dashboard.dprd-kab.kab-kota', compact(
            'partais',
            'kecamatans',
            'hasil',
        ));
    }
}
