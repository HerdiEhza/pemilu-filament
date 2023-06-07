<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TpsInput as ModelsTpsInput;
use App\Models\TpsResult;
use Illuminate\Support\Facades\Auth;

class TpsInput extends Component
{
    public $user_id;
    public $tps_id;
    public $kategori_pemilu_id;
    public $test;
    public $paslon_id;
    public $nama_paslon;
    public $perolehan_suara;
    public $result = [];

    public function mount()
    {
        $this->user_id = Auth::id();
        $this->tps_id = Auth::user()->tps_id;
    }

    public function submitForm()
    {
        $master = ModelsTpsInput::create([
            'user_id' => Auth::id(),
            'tps_id' => Auth::user()->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
        ]);

        foreach ($this->result as $key => $value) {
            TpsResult::create([
                'pasangan_calon_id' => $value['pasangan_calon_id'],
                'nama_pasangan_calon' => $value['nama_paslon'],
                'perolehan_suara' => $value['perolehan_suara'],
                'tps_input_id' => $master->id
            ]);
        }

        $this->clearForm();

        // $this->currentStep = 1;
    }

    public function clearForm()
    {
        $this->user_id = '';
        $this->kategori_pemilu_id = '';
    }

    public function render()
    {
        $kategoriP = KategoriPemilu::all();
        $paslons = PasanganCalon::where('kategori_pemilu_id', $this->kategori_pemilu_id)->get();

        return view('livewire.tps-input', compact('kategoriP', 'paslons'));
    }
}
