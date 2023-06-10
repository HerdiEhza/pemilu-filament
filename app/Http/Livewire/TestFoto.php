<?php

namespace App\Http\Livewire;

use App\Models\DataPartai;
use Livewire\Component;
use Livewire\WithFileUploads;

class TestFoto extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function save()
    {
        $this->validate([
            'photos.' => 'max:15024', // 5MB Max
        ]);

        foreach ($this->photos as $photo) {
            $file_name = uniqid().$photo->extension();// or any name you want
            $photo->store('photos', $file_name);
        }
    }

    public function render()
    {
        $partais = DataPartai::all();
        return view('livewire.test-foto', compact('partais'));
    }
}
