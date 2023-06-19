<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerDapil;

use App\Models\DataDapil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\PasanganCalon;
use Livewire\Component;

class Paslon extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;
    public $dapilPaslonActive;
    public $dapilPartaiActive;

    public $suaras;
    public $paslonActive;
    public $totalSuaraPartai;
    public $persentaseTerhadapSuaraPartai;
    public $persentaseTerhadapSuaraDapil;

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;

        $getUrl = explode('/',  $request->path());
        $this->dataDapilActive = $getUrl[2];
        $this->dapilPartaiActive = $getUrl[3];
        $this->dapilPaslonActive = end($getUrl);

        $collection = DB::table('tps_results')
            ->select('pasangan_calon_id', 'data_dapil_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('pasangan_calon_id, data_dapil_id, data_partai_id')
            ->get();

        $this->suaras = $collection->sortByDesc('total_suara');
        $this->suaras = $this->suaras->values()->all();
        
        $this->paslonActive = $collection->where('pasangan_calon_id', $this->dapilPaslonActive);
        $this->paslonActive = $this->paslonActive->all();
        $this->paslonActive = array_values($this->paslonActive);
        
        $this->totalSuaraPartai = $collection->where('data_partai_id', $this->dapilPartaiActive);
        $this->totalSuaraPartai = $this->totalSuaraPartai->sum('total_suara');

        $this->persentaseTerhadapSuaraPartai = ($this->paslonActive[0]->total_suara / $this->totalSuaraPartai) * 100;
        $this->persentaseTerhadapSuaraPartai = round($this->persentaseTerhadapSuaraPartai, 2);
        
        $getTotalSuaraDapil = $collection->where('data_dapil_id', $this->dataDapilActive);
        $getTotalSuaraDapil = $getTotalSuaraDapil->sum('total_suara');
        $this->persentaseTerhadapSuaraDapil = ($this->totalSuaraPartai / $getTotalSuaraDapil) * 100;
        $this->persentaseTerhadapSuaraDapil = round($this->persentaseTerhadapSuaraDapil, 2);
            // dd($this->persentaseTerhadapSuaraDapil);
    }

    public function render()
    {
        $partais = DataPartai::all();
        $paslons = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->where('nama_partai_id', $this->dapilPartaiActive)->get();
        $bakalCalon = PasanganCalon::where('id', $this->dapilPaslonActive)->where('data_dapil_id', $this->dataDapilActive)->where('nama_partai_id', $this->dapilPartaiActive)->first();
        $dapilPemilihan = DataDapil::where('id', $this->dataDapilActive)->first();

        return view('livewire.dashboard.dprd-kab.per-dapil.paslon', compact(
            'partais',
            'paslons',
            'bakalCalon',
            'dapilPemilihan',
        ));
    }
}
