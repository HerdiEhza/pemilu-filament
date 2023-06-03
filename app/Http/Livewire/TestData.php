<?php

namespace App\Http\Livewire;

use App\Data\TestData as DataTestData;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TestData as ModelsTestData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Arr;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class TestData extends Component
{
    // public TestData $data;
    // public $manual_kategori_pemilu_id;
    public $user_id;
    public $tps_id;
    public $kategori_pemilu_id;
    public $result = [];
    public $test;

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->tps_id = Auth::user()->tps_id;        
    }

    // protected $rules = [
    //     'user_id' => 'required',
    //     'result' => 'required',
    //     'result.paslon_id' => 'required',
    //     'result.nama_paslon' => 'required',
    //     'result.perolehan_suara' => 'required',
    //     'kategori_pemilu_id' => 'required',
    // ];

    // public function hydrate()
    // {
    //     // foreach ($this->result as $data) {
    //     //     array_push($this->result, [
    //     //         "paslon_id" => $data['paslon_id'],
    //     //         "nama_paslon" => $data['nama_paslon'],
    //     //         "perolehan_suara" => $data['nama_paslon']
    //     //     ]);
    //     // };

    //     foreach ($this->result as $data) {
    //         $this->data = json_encode([
    //             'paslon_id' => $data->paslon_id,
    //             'nama_paslon' => $data->nama_paslon,
    //             'perolehan_suara' => $data->perolehan_suara,
    //         ]);
    //     }
    // }

    // public function updated()
    // {
    //     foreach($this->result as $key => $value){
    //         // echo $value;
    //         $this->test = new DataTestData(
    //             paslon_id: $value->paslon_id,
    //             nama_paslon: $value->nama_paslon,
    //             perolehan_suara: $value->perolehan_suara,
    //         );
    //     }
    //     $this->result = Arr::forget($array, $key);
    // }
    public function dump()
    {
        // $mapped = Arr::mapWithKeys($this->result, function (array $item, int $key) {
        //     return [$item['paslon_id'] => $item['nama_paslon']];
        // });

        // foreach($this->result as $key => $value){
        //     // echo $value;
        // }

        // $collection = collect($this->result);
        // $tt = $collection->each(function (string $item, int $key){
        //     // foreach(){

        //     // }
        //     // new DataTestData(
        //     //     paslon_id: $item->paslon_id,
        //     //     nama_paslon: $item->nama_paslon,
        //     //     perolehan_suara: $item->perolehan_suara,
        //     // );
        //     // return $item->paslon_id;
        // });
        dd(array_column($this->result, null, 'paslon_id'));
    }

    public function submitForm()
    {
        // DataTestData::from(ModelsTestData::class);
        // DataTestData::from([
        //     'paslon_id' => $this->paslon_id,
        //     'nama_paslon' => $this->nama_paslon,
        //     'kategori_pemilu' => $this->kategori_pemilu_id,
        // ]);

        // $toJson = json_encode($this->result, true);

        // foreach($this->result as $key => $value) {
        //     foreach($value as $uu) {
        //         $this->test = new DataTestData(
        //             paslon_id: $uu->paslon_id,
        //             nama_paslon: $uu->nama_paslon,
        //             perolehan_suara: $uu->perolehan_suara,
        //         );
        //     }
        // }

        // $this->result = Arr::forget($this->result, $key);

        $collection = collect($this->result);

        ModelsTestData::create([
            'user_id' => $this->user_id,
            'tps_id' => $this->tps_id,
            // 'user_id' =>Auth::id() ?? null,
            // 'tps_id' => Auth::user()->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'result' => array_values($this->result),
            // 'result' => $this->test,
            // 'result' => $value,
            // 'result' => $collection->each(function (object $item, int $key){
            //     // foreach(){

            //     // }
            //     new DataTestData(
            //         paslon_id: $item->paslon_id,
            //         nama_paslon: $item->nama_paslon,
            //         perolehan_suara: $item->perolehan_suara,
            //     );
            // }),
            // 'result' => [
            //     // array_values(
            //         'paslon_id' => $this->result['paslon_id'],
            //         'nama_paslon' => $this->result['nama_paslon'],
            //         'perolehan_suara' => $this->result['perolehan_suara'],
            //     // )
            // ],
            // 'result' => [
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         perolehan_suara: 'perolehan_suara',
            //     ),
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         perolehan_suara: 'perolehan_suara',
            //     ),
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         perolehan_suara: 'perolehan_suara',
            //     ),
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         perolehan_suara: 'perolehan_suara',
            //     )
            // ],
        ]);

        // DataTestData::from([
        //     'paslon_id' => 'Hello laravel-data',
        //     'nama_paslon' => 'This is an introduction post for the new package',
        //     'kategori_pemilu' => 'null',
        // ]);

        // $this->successMsg = 'Team successfully created.';

        $this->clearForm();

        // $this->currentStep = 1;
    }

    public function clearForm()
    {
        $this->user_id = '';
        $this->kategori_pemilu_id = '';
        // $this->result = '';
    }

    public function render()
    {
        $kategoriP = KategoriPemilu::all();
        $paslons = PasanganCalon::where('kategori_pemilu_id', $this->kategori_pemilu_id)->get();

        return view('livewire.test-data', compact('kategoriP', 'paslons'));
    }

    // public function mount(PasanganCalon $paslons)
    // {
    // foreach(PasanganCalon::where('kategori_pemilu_id', $this->manual_kategori_pemilu_id)->get() as $item) {
    //     array_push($this->result, [
    //         "paslon_id" => $item->id,
    //         "nama_paslon" => $item->nama_pasangan_calon,
    //         "kategori_pemilu" => $item->kategori_pemilu_id,
    //         "perolehan_suara" => $item->quantity,
    //     ]);
    // }

     // public function change()
    // {
    //     $this->mount();
    // }
}
