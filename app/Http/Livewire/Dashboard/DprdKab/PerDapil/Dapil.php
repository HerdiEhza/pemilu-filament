<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerDapil;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\PasanganCalon;
use Livewire\Component;

class Dapil extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;

    public $suaras;
    public $suaraPartais;

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;

        $getUrl = explode('/',  $request->path());
        $this->dataDapilActive = end($getUrl);

        $this->suaras = DB::table('tps_results')
            ->select('pasangan_calon_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('pasangan_calon_id, data_partai_id')
            ->get();

        $this->suaraPartais = DB::table('tps_result_partais')
            ->select('nama_partai', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara_partai'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('nama_partai, data_partai_id')
            ->get();

        // dd($this->suaraPartais);
    }

    public function render()
    {
        $partais = DataPartai::all();
        $paslons = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->get();

        return view('livewire.dashboard.dprd-kab.per-dapil.dapil', compact(
            'partais',
            'paslons'
        ));
    }
}
