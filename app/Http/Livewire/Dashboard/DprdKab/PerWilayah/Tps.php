<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerWilayah;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\DataTps;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\IndonesiaVilages;

class Tps extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive;
    public $kabKotaActives;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive = 63;

    public $listTps;
    public $suaras;
    public $partais;

    function mount(Request $request)
    {
        $getUrl = explode('/',  $request->path());
        $this->provinsiActive = $getUrl[2];
        $this->kabKotaActive = $getUrl[3];
        $this->kecamatanActive = $getUrl[4];
        $this->kelurahanActive = $getUrl[5];
        $this->tpsActive = end($getUrl);

        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->listTps = DataTps::where('kelurahan_desa_id', $this->kelurahanActive)->get();
        $this->partais = DataPartai::all();
        $this->suaras = DB::table('tps_results')
            ->select('tps_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('tps_id, data_partai_id')
            ->get();
    }

    public function render()
    {
        $jumlahSuaraSah = DB::table('tps_results')
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->tpsActive)
            ->select(DB::raw('SUM(perolehan_suara) as total_suara_sah'))
            ->first();

        $jumlahSuaraTidakSah = DB::table('tps_inputs')->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->tpsActive)->select('jumlah_suara_tidak_sah')->first();

        $jumlahDpt = DataTps::where('id', $this->tpsActive)->first();

        return view('livewire.dashboard.dprd-kab.per-wilayah.tps', compact(
            'jumlahSuaraSah',
            'jumlahSuaraTidakSah',
            'jumlahDpt',
        ));
    }
}
