<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\IndonesiaCities;
use App\Models\IndonesiaDistricts;
use App\Models\IndonesiaProvinces;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class DprdKabDashboard extends Component
{
    public $kategoriPemiluActive;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $tpsActive;
    public $dataDapilActive;

    public $kabKota;
    public $kecamatan;

    function mount()
    {
        if($this->kabKotaActive == 0)
        {
            $this->kabKota = IndonesiaCities::all();
        }
    }

    function updated()
    {
        $this->dataDapilActive = DB::table('data_dapils')->where('cities_id', $this->kabKotaActive)->first();

        if($this->kabKotaActive == 0)
        {
            $this->kabKota = IndonesiaCities::all();
        } elseif(!$this->kabKotaActive == 0) {
            $kecamatan = IndonesiaDistricts::where('indonesia_cities_id', $this->kabKotaActive)->get();
            $this->kecamatan = $kecamatan;
        }
    }
    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $dapils = DataDapil::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->withSum('perolehanSuara as total_suara', 'perolehan_suara')->get();
        $partais = DataPartai::all();

        $latestPosts = DB::table('tps_results')
            ->select('pasangan_calon_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)->where('is_active', true)
            ->groupBy('pasangan_calon_id');

        $users = DB::table('pasangan_calons')
            ->joinSub($latestPosts, 'latest_posts', function (JoinClause $join) {
                $join->on('pasangan_calons.id', '=', 'latest_posts.pasangan_calon_id');
            })->get();

        foreach ($users as $rec){
            $created_po[] = $rec->pasangan_calon_id;
        };

        $all = DB::table('pasangan_calons')
            ->join('data_partais', 'pasangan_calons.data_partai_id', '=', 'data_partais.id')
            ->select('pasangan_calons.*', 'data_partais.nama_partai')
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)
            // ->whereNotIn('pasangan_calons.id', $created_po)
            ->groupByRaw('pasangan_calons.id, data_partais.nama_partai')
            ->get();

        $setAllItems = collect($users)->merge($all);
        $allItems = collect($setAllItems);



        return view('livewire.dashboard.dprd-kab-dashboard', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'users', 'all', 'allItems'));
    }
}
