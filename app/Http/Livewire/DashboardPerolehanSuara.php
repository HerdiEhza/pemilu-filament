<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\DataDapil;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TpsResult;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class DashboardPerolehanSuara extends Component
{
    public $kategoriPemiluActive =  4;
    public $dataDapilActive =  63;

    protected $listeners = [
        // 'perolehan-suara-submitted' => 'render'
        'updateListDashboard' => 'render'
        // '$refresh'
    ];

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

        // $result = TpsResult::select('id', 'nama_pasangan_calon', 'perolehan_suara')->withSum('perolehan_suara')->get();

        // return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'result'));

        // $latestPosts = DB::table('pasangan_calons')
        //     // ->join('pasangan_calons', 'data_partais.id', '=', 'pasangan_calons.nama_partai_id')
        //     ->join('tps_results', 'pasangan_calons.nama_partai_id', '=', 'tps_results.data_partai_id')
        //     ->select('pasangan_calons.*', 'tps_results.perolehan_suara', 'tps_results.data_partai_id', 'tps_results.is_active', DB::raw('SUM(tps_results.perolehan_suara) as total_suara'))
        //     ->where('pasangan_calons.kategori_pemilu_id', $this->kategoriPemiluActive)->where('pasangan_calons.data_dapil_id', $this->dataDapilActive)->where('tps_results.is_active', true)
        //     ->groupBy('nama_partai_id');
        //     // ->withSum('perolehanSuara as total_suara', 'tps_results.perolehan_suara')
        //     // ->havingRaw('SUM(tps_results.perolehan_suara)')
        //     // ->get();

        // $users = DB::table('data_partais')
        // ->joinSub($latestPosts, 'latest_posts', function (JoinClause $join) {
        //     $join->on('data_partais.id', '=', 'latest_posts.nama_partai_id');
        // })->get();

// $sortByVotes = $request->boolean('sort_by_votes');

// $users = DB::table('users')
//     ->when($sortByVotes, function (Builder $query, bool $sortByVotes) {
//         $query->orderBy('votes');
//     }, function (Builder $query) {
//         $query->orderBy('name');
//     })
//     ->get();

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
        }

        $all = DB::table('pasangan_calons')
            ->join('data_partais', 'pasangan_calons.nama_partai_id', '=', 'data_partais.id')
            ->select('pasangan_calons.*', 'data_partais.nama_partai')
            ->where('kategori_pemilu_id', $this->kategoriPemiluActive)->where('data_dapil_id', $this->dataDapilActive)
            ->whereNotIn('pasangan_calons.id', $created_po)
            ->groupByRaw('pasangan_calons.id, data_partais.nama_partai')
            ->get();

        $setAllItems = collect($users)->merge($all);
        $allItems = collect($setAllItems);

        return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'kategoriPemilus', 'dapils', 'users', 'all', 'allItems'));
    }
}
