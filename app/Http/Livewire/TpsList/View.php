<?php

namespace App\Http\Livewire\TpsList;

use App\Models\DataPartai;
use App\Models\TpsInput;
use Livewire\Component;

class View extends Component
{
    public TpsInput $getData;
    public $tpsInputData;
    // public $partais;

    public function mount($id)
    {
        // $this->tpsInputData = $tpsInput;
        $this->getData = TpsInput::with('kategoriPemilu', 'hasil', 'tps')->findOrfail($id);
        $this->tpsInputData = $this->getData;
        // $this->partais = DataPartai::all();
        // $this->tpsInputData = TpsInput::with('kategoriPemilu')->get();
    }

    public function render()
    {
        return view('livewire.tps-list.view');
    }
}
