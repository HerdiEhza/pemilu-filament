<?php

namespace App\Http\Livewire\TpsList;

use App\Models\TpsInput;
use Livewire\Component;

class Index extends Component
{
    public $listSuara;

    public function mount()
    {
        $this->listSuara = TpsInput::all();
    }

    public function render()
    {
        return view('livewire.tps-list.index');
    }
}
