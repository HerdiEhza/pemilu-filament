<?php

namespace App\Http\Livewire\TpsList;

use App\Models\PasanganCalon;
use App\Models\TpsInput;
use App\Models\TpsResult;
use Livewire\Component;

class Edit extends Component
{
    public TpsInput $getData;
    public $tpsInputData;
    public $result = [];
    // public $partais;

    public function mount($id)
    {
        $this->getData = TpsInput::with('kategoriPemilu', 'hasil', 'tps')->findOrfail($id);
        $this->tpsInputData = $this->getData;
    }

    public function submitForm()
    {
        $paslonData = PasanganCalon::select('id','nama_pasangan_calon')->get();

        foreach ($this->result as $index => $result) {
            foreach ($paslonData as $paslon) {
                if ($index == $paslon->id) {
                    TpsResult::updateOrCreate([
                        'pasangan_calon_id' => $paslon->id,
                        'nama_pasangan_calon' => $paslon->nama_pasangan_calon,
                        'perolehan_suara' => $result['perolehan_suara'] ?? '0',
                        'tps_input_id' => $this->getData->id
                    ]);
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.tps-list.edit');
    }
}
