<?php

namespace App\Http\Livewire\Dashboard;

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

use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class MasterDashboard extends Component
{
    public $kategoriPemiluActive = 4;
    public $provinsiActive = 1;
    public $kabKotaActive;
    public $kecamatanActive;
    public $kelurahanActive;
    public $tpsActive;
    public $dataDapilActive;

    public $currentUrl;

    protected $listeners = [
        'updateListDashboard' => 'render'
    ];

    protected $queryString = [
        // 'kategoriPemiluActive' => ['except' => '0', 'as' => 'kp'],
        // 'provinsiActive' => ['except' => '0', 'as' => 'prov'],
        // 'kabKotaActive' => ['except' => '0', 'as' => 'kab'],
        // 'kecamatanActive' => ['except' => '0', 'as' => 'kec'],
        // 'kelurahanActive' => ['except' => '0', 'as' => 'kel'],
    ];

    function mount()
    {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
        $this->currentUrl = url()->current();
    }

    function updated() : void {
        $this->kategoriPemiluActive = $this->kategoriPemiluActive;
    }

    function resetDashboard()
    {
        $this->emit('updateListDashboard');
        $this->provinsiActive = null;
        $this->kabKotaActive = null;
        $this->kecamatanActive = null;
        $this->kelurahanActive = null;
        $this->tpsActive = null;
    }

    function reloadListDashboard()
    {
        $this->emit('updateListDashboard');
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

        $getPerolehanSuara = DB::table('tps_results')
            ->select('data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupBy('data_partai_id');

        // $sizes = DB::table('tps_inputs')
            // ->crossJoin('tps_results')
        //     ->select('data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
        //     ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
        //     ->groupBy('data_partai_id');
            // ->get();

        $orders = DB::table('tps_results')
            ->select('tps_kab_id', 'data_partai_id', DB::raw('SUM(perolehan_suara) as total_suara'))
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('is_active', true)
            ->groupByRaw('tps_kab_id, data_partai_id')
            // ->groupByRaw('tps_id', data_partai_id, tps_provinsi_id, tps_kab_id, tps_kec_id, tps_kel_id')
            ->get();



        // $getTps = DB::table('data_tps')->select('id', 'provinsi_id', 'kabupaten_kota_id', 'kecamatan_id', 'kelurahan_desa_id')->get();

        // $orders->whenEmpty(function (Collection $orders) {
        //     return $orders->push('provinsi_id', 'kabupaten_kota_id', 'kecamatan_id', 'kelurahan_desa_id');
        // });

        $orders = collect($orders);
        // $orders -$orders->mapToGroups(function (array $item, int $key) {
        //     return [$item['department'] => $item['name']];
        // });


        // $orders = collect($orders)->merge($getTps);
        // $orders->collapse();
        // $orders->all();

        // $orders = DataTps::with('hasilSuara')->get();
        // $getTps = DB::table('data_tps')
        // ->joinSub($orders, 'perolehan_suara', function (JoinClause $join) {
        //     $join->on('data_tps.id', '=', 'perolehan_suara.tps_id'); //karna group by partai bukan perorangan
        // // })->select('id', 'perolehan_suara.total_suara')->get(); //karna group by partai bukan perorangan
        // })->groupBy('tps_id');

        // $setAllItems = collect($orders)->merge($getTps);

        $getPartaiList = DB::table('data_partais')
            ->joinSub($getPerolehanSuara, 'perolehan_suara', function (JoinClause $join) {
                $join->on('data_partais.id', '=', 'perolehan_suara.data_partai_id'); //karna group by partai bukan perorangan
            // })->select('id', 'perolehan_suara.total_suara')->get(); //karna group by partai bukan perorangan
            })->get();


        // $tps = DB::table('getPartaiList')
        //     ->join('contacts', 'getPartaiList.id', '=', 'contacts.user_id')
        //     ->join('orders', 'getPartaiList.id', '=', 'orders.user_id')
        //     ->select('getPartaiList.*', 'contacts.phone', 'orders.price')
        //     ->get();

        // foreach ($getPartaiList as $rec){
        //     $created_po[] = $rec->data_partai_id;
        // }

        $all = DB::table('pasangan_calons')
            ->join('data_partais', 'pasangan_calons.data_partai_id', '=', 'data_partais.id')
            ->select('pasangan_calons.*', 'data_partais.nama_partai')
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)
            // ->whereNotIn('pasangan_calons.id', $created_po)
            ->groupByRaw('pasangan_calons.id, data_partais.nama_partai')
            ->get();

        // $setAllItems = collect($getPartaiList)->merge($all);
        // $allItems = collect($setAllItems);

        return view('livewire.dashboard.master-dashboard', compact(
            'paslon',
            'partais',
            'kategoriPemilus',
            'dapils',
            'provinsis',
            'kabkotas',
            'kecamatans',
            'kelurahans',
            'tpsList',
            'getPerolehanSuara',
            'getPartaiList',
            // 'allItems',
            // 'getTps',
            'orders',
            // 'setAllItems'
        ));
    }
}
