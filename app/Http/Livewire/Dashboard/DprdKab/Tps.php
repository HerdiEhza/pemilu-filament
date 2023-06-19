<?php

namespace App\Http\Livewire\Dashboard\DprdKab;

use Illuminate\Http\Request;
use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataTps;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class Tps extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;
    public $previous;
    public $back;

    function back()
    {
        $this->previous = URL::previous();

        return redirect($this->previous);
    }

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->previous = URL::previous();

        $getUrl = explode('/',  $request->path());
        // dd($getUrl);
        $this->kabKotaActive = $getUrl[1];
        $this->kecamatanActive = $getUrl[2];
        $this->kelurahanActive = $getUrl[3];
        $this->tpsActive = end($getUrl);
    }

    public function render()
    {
        $partais = DataPartai::all();
        $dataTps = DataTps::where('kelurahan_desa_id', $this->kelurahanActive)->get();

        $hasil = DB::table('tps_results')
            ->select('tps_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            // ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->kelurahanActive)
            ->groupByRaw('tps_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();

        // $totalSuaraSah = DB::table('tps_results')->select('tps_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->tpsActive)->groupByRaw('tps_id, data_partai_id')->get();

        $jumlahSuaraSah = DB::table('tps_results')
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->tpsActive)
        ->select(DB::raw('SUM(perolehan_suara) as total_suara_sah'))
        ->first();
        $jumlahSuaraTidakSah = DB::table('tps_inputs')->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('tps_id', $this->tpsActive)->select('jumlah_suara_tidak_sah')->first();

        $jumlahDpt = DataTps::where('id', $this->tpsActive)->first();

        return view('livewire.dashboard.dprd-kab.tps', compact(
            'partais',
            'dataTps',
            'hasil',
            'jumlahDpt',
            'jumlahSuaraSah',
            'jumlahSuaraTidakSah',
        ));
    }
}
