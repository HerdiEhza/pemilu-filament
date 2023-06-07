<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\PerolehanSuara;
use App\Models\TestData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class DashboardPerolehanSuara extends Component
{
    public $kategoriPemiluActive = 1;

    public function render()
    {
        $kategoriPemilus = KategoriPemilu::all();
        $paslon = PasanganCalon::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get();
        $partais = DataPartai::all();

        $getPerolehanSuara = PerolehanSuara::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get('result');
        $decodePerolehanSuara = json_decode($getPerolehanSuara);
        $perolehanSuara = $decodePerolehanSuara;

        $uisadhnf = DB::table('perolehan_suaras')->where('kategori_pemilu_id', $this->kategoriPemiluActive)->get('result');
        $pakaiDb = json_decode($uisadhnf);

        foreach ($pakaiDb as $bree) {
            echo $bree->result;
            // $kk = $bree->result;
            // foreach ($kk as $huu) {
            //     echo $huu->perolehan_suara;
            // };
        };

        // collect(DB::table('perolehan_suaras')->where('kategori_pemilu_id', $this->kategoriPemiluActive)->get())->each(function ($item) {
        //     echo $bree = $item;
        // });

        $collection = collect($pakaiDb)->map(function (object $name) {
            return array($name->result);
        });
        // $collection = collect($pakaiDb);

        // $anjay = $collection->map(function (object $number) {
        //     return $number;
        // });

        // $grouped = $collection->groupBy(['1', function (string $item) {
        //     return $item['perolehan_suara'];
        // }], preserveKeys: true);
        // $grouped = $collection->groupBy('paslon_id')->flatten(1);
        // $grouped = $collection->keys();
        // $grouped->all();
        $grouped = $collection->flatten(1);
        $grouped->values()->all();

        $getEja = TestData::where('kategori_pemilu_id', $this->kategoriPemiluActive)->get('result');
        $data = new Collection($getEja);
        // $mapped = Arr::mapWithKeys($getEja, function (array $item, int $key) {
        //     return [$item['email'] => $item['name']];
        // });
        // $eja = json_decode($getEja);
        // $data->dd();

        // $data = $rr;
        // $newData = new Collection($rr->result);

        foreach($getEja as $gt) {
            foreach($gt->result as $dat) {
                $collect = collect($dat);
            }
        }
        // $collect->dd();

        // echo $getEja;
        // $data->all();

        // $data = $rr->values();

        // $result = $newData->groupBy(['paslon_id', function (array $item) {
        //     return $item['perolehan_suara'];
        // }], preserveKeys: true);
        // foreach (TestData::where('kategori           _pemilu_id', $this->kategoriPemiluActive)->get('result')->cursor() as $result) {
        //     echo $result->perolehan_suara;
        // }

        return view('livewire.dashboard-perolehan-suara', compact('paslon', 'partais', 'perolehanSuara', 'kategoriPemilus', 'pakaiDb', 'uisadhnf', 'grouped', 'getEja' , 'data', 'collect'));
    }
}

// buat sum()
// $collection = collect([1, 2, 3]);

// $piped = $collection->pipe(function (Collection $collection) {
//     return $collection->sum();
// });
