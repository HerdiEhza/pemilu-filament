<?php

namespace App\Http\Livewire;

use App\Data\TestData as DataTestData;
use App\Models\PasanganCalon;
use App\Models\TestData as ModelsTestData;
use Livewire\Component;

class TestData extends Component
{
    // public TestData $data;
    public $manual_kategori_pemilu_id = 1;
    public $user_id;
    public $tps_id = 1;
    public $kategori_pemilu_id;
    public $result = [];

    public function mount()
    {
        foreach (PasanganCalon::where('kategori_pemilu_id', $this->manual_kategori_pemilu_id)->get() as $item) {
            array_push($this->result, [
                "paslon_id" => $item->id,
                "nama_paslon" => $item->nama_pasangan_calon,
                "kategori_pemilu" => $item->kategori_pemilu_id,
                "perolehan_suara" => $item->quantity,
            ]);
        }
    }

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
            'tps_id' => $this->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'result' => [ 
                // array_values(
                    'paslon_id' => array_values($this->result['paslon_id']),
                    'nama_paslon' => $this->result['nama_paslon'],
                    'kategori_pemilu' => $this->result['kategori_pemilu'],
                // )
            ],
            // 'result' => [
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         kategori_pemilu: 'kategori_pemilu',
            //     ),
            //     new DataTestData(
            //         paslon_id: 'paslon_id',
            //         nama_paslon: 'nama_paslon',
            //         kategori_pemilu: 'kategori_pemilu',
            //     )
            // ],
        ]);

        // DataTestData::from([
        //     'paslon_id' => 'Hello laravel-data',
        //     'nama_paslon' => 'This is an introduction post for the new package',
        //     'kategori_pemilu' => 'null',
        // ]);
    }

    public function render()
    {
        
        return view('livewire.test-data');
    }
}
