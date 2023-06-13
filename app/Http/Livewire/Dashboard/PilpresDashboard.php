<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class PilpresDashboard extends Component
{
    public $kecamatanActive;

    public function render()
    {
        return view('livewire.dashboard.pilpres-dashboard');
    }
}
