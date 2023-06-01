<?php

namespace App\Http\Livewire;

use App\Data\TestData as DataTestData;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TestData as ModelsTestData;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TestData extends Component
{
    // public TestData $data;
    // public $manual_kategori_pemilu_id;
    public $user_id;
    public $tps_id = 1;
    public $kategori_pemilu_id;
    public $result = [];

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
    //     foreach ($this->result as $data) {
    //         array_push($this->result, [
    //             "paslon_id" => $data['paslon_id'],
    //             "nama_paslon" => $data['nama_paslon'],
    //             "perolehan_suara" => $data['nama_paslon']
    //         ]);
    //     };
    // }

    public function submitForm()
    {
        // DataTestData::from(ModelsTestData::class);
        // DataTestData::from([
        //     'paslon_id' => $this->paslon_id,
        //     'nama_paslon' => $this->nama_paslon,
        //     'kategori_pemilu' => $this->kategori_pemilu_id,
        // ]);

        ModelsTestData::create([
            'user_id' => auth()->id() ?? null,
            // 'tps_id' => $this->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'result' => $this->result,
            // 'result' => [
            //     // array_values(
            //         'paslon_id' => $this->result[1]['paslon_id'],
            //         'nama_paslon' => $this->result[1]['nama_paslon'],
            //         'perolehan_suara' => $this->result[1]['perolehan_suara'],
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
