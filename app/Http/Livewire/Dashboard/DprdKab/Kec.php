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

class Kec extends Component
{
    public $kategoriPemiluActive;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;
    
    function mount(Request $request)
    {
        $getUrl = explode('/',  $request->path());
        // dd($getUrl);
        $this->kabKotaActive = $getUrl[1];
        $this->kecamatanActive = end($getUrl);
    }

    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $dapils = DataDapil::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->withSum('perolehanSuara as total_suara', 'perolehan_suara')->get();
        $partais = DataPartai::all();

        $provinsis = IndonesiaProvinces::all();
        $kabkotas = IndonesiaCities::where('indonesia_provinces_id', $this->provinsiActive)->get();
        $kecamatans = IndonesiaDistricts::where('indonesia_cities_id', $this->kabKotaActive)->get();
        $kelurahans = IndonesiaVilages::where('indonesia_districts_id', $this->kecamatanActive)->get();
        $tpsList = DataTps::where('kelurahan_desa_id', $this->kelurahanActive)->get();

        return view('livewire.dashboard.dprd-kab.kec', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'provinsis', 'kabkotas', 'kecamatans', 'kelurahans', 'tpsList'));
    }
}
