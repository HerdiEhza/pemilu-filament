<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Illuminate\Http\Request;
use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataTps;
use App\Models\IndonesiaVilages;

use Illuminate\Support\Facades\DB;

class Kel extends Component
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
        $this->kecamatanActive = $getUrl[2];
        $this->kelurahanActive = end($getUrl);
    }

    public function render()
    {
        $partais = DataPartai::all();
        $tps = DataTps::where('kelurahan_desa_id', $this->kelurahanActive)->get();

        $hasil = DB::table('tps_results')
            ->select('tps_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            // ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->kelurahanActive)
            ->groupByRaw('tps_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();

        return view('livewire.dashboard.dprd-kab.kel', compact(
            'partais',
            'tps',
            'hasil'
        ));
    }
}
