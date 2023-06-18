<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Illuminate\Http\Request;

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

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;

        $getUrl = explode('/',  $request->path());
        // dd($getUrl);
        $this->kabKotaActive = $getUrl[1];
        $this->kecamatanActive = $getUrl[2];
        $this->kelurahanActive = $getUrl[3];
        $this->tpsActive = $getUrl[4];
    }

    public function render()
    {
        $partais = DataPartai::all();
        $paslons = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', 63)->get();

        return view('livewire.dashboard.dprd-kab.paslon', compact(
            'partais',
            'paslons'
        ));
    }
}
