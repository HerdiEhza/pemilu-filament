<?php

namespace App\Http\Livewire\Dashboard\DprdKab\PerDapil;

use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Master extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActives;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive = 63;

    public $dapils;
    public $suaras;
    public $partais;

    function mount(Request $request)
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->dapils = DataDapil::whereNotNull('cities_id')->get();
        $this->partais = DataPartai::all();
        $this->suaras = DB::table('tps_results')
        ->select('data_dapil_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('data_dapil_id, data_partai_id')
        ->get();

        $getUrl = explode('/',  $request->path());
        // $this->kabKotaActive = end($getUrl);
    }

    function updated() : void {
        // $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    public function updatedkabKotaActive($value)
    {
        $this->dapils = DataDapil::where('cities_id', $value)->get();

        $this->suaras = DB::table('tps_results')
        ->select('data_dapil_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        ->groupByRaw('data_dapil_id, data_partai_id')
        ->get();
    }

    public function render()
    {
        $kabKotas = IndonesiaCities::all();

        $hasil = DB::table('tps_results')
            ->select('data_dapil_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)->where('data_dapil_id', $this->dataDapilActive)
            ->groupByRaw('data_dapil_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, data_dapil_id, tps_kel_id')
            ->get();

        $columnChartModel =
            (new ColumnChartModel())
                ->setTitle('Perolehan Suara')
                ->addColumn('PKB', 2448, '#f1f')
                ->addColumn('GERINDRA', 2677, '#f63')
                ->addColumn('PDIP', 2578, '#f23')
                ->addColumn('GOLKAR', 2539, '#f9f')
                ->addColumn('NASDEM', 2280, '#f78')
                ->addColumn('GARUDA', 1472, '#fda')
                ->addColumn('BERKARYA', 2612, '#f7d')
                ->addColumn('PKS', 2364, '#f4af')
                ->addColumn('PERINDO', 2554, '#f439')
                ->addColumn('PPP', 2542, '#f89f')
                ->addColumn('PSI', 2316, '#f985')
                ->addColumn('PAN', 2426, '#f6d')
                ->addColumn('HANURA', 2522, '#f7cf')
                ->addColumn('DEMOKRAT', 2529, '#ff3')
                ->addColumn('PBB', 2487, '#ff9')
                ->addColumn('PKPI', 2305, '#fd34')
            ;

        return view('livewire.dashboard.dprd-kab.per-dapil.master', compact(
            'kabKotas',
            'hasil',
            'columnChartModel',
        ));
    }
}
