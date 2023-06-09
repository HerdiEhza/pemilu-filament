<?php

namespace App\Http\Livewire\TpsList;

use App\Models\TpsInput;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\Actions
;
class Index extends Component
{
    use Actions;

    public $listSuara;
    public $isDisable;
    public $tpsInput;

    protected $listeners = [
        'activate',
        'unactive',
        'cancelledAktif',
        'updateList' => 'render'
    ];

    public function mount()
    {
        $this->listSuara = TpsInput::all();
    }
    public function dehydrate()
    {
        $this->listSuara = TpsInput::all();
    }

    public function aktif(TpsInput $tpsInput): void
    {
        $this->dialog()->confirm([
            'title'       => 'Apakah Anda yakin?',
            'description' => 'Mengubah status list input suara menjadi aktif?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Tentu, aktifkan list',
                'method' => 'activate',
                'params' => 'Saved',
            ],
            'reject' => [
                'label'  => 'No, cancel',
                'method' => 'cancelledAktif',
            ],
        ]);
        $this->tpsInput = $tpsInput;
    }

    public function diaktif(TpsInput $tpsInput): void
    {
        $this->dialog()->confirm([
            'title'       => 'Apakah Anda yakin?',
            'description' => 'Mengubah status list input suara menjadi tidak aktif?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Tentu, matikan list',
                'method' => 'unactive',
                'params' => 'Saved',
            ],
            'reject' => [
                'label'  => 'No, cancel',
                'method' => 'cancelledAktif',
            ],
        ]);
        $this->tpsInput = $tpsInput;
    }

    public function activate(): void
    {
        $this->tpsInput->user_id = $this->tpsInput->user_id;
        $this->tpsInput->tps_id = $this->tpsInput->tps_id;
        $this->tpsInput->kategori_pemilu_id = $this->tpsInput->kategori_pemilu_id;
        $this->tpsInput->is_active = true;
        $this->tpsInput->save();

        $this->emit('updateList');
        $this->notification([
            'title'       => 'Status list input berhasil diaktifkan!',
            'icon'        => 'success'
        ]);
    }
    public function unactive(): void
    {
        $this->tpsInput->user_id = $this->tpsInput->user_id;
        $this->tpsInput->tps_id = $this->tpsInput->tps_id;
        $this->tpsInput->kategori_pemilu_id = $this->tpsInput->kategori_pemilu_id;
        $this->tpsInput->is_active = false;
        $this->tpsInput->save();

        $this->emit('updateList');
        $this->notification([
            'title'       => 'Status list input berhasil dinonaktifkan!',
            'icon'        => 'success'
        ]);
    }

    public function cancelledAktif(): void
    {
        $this->notification([
            'title'       => 'User not deleted!',
            'icon'        => 'warning'
        ]);
    }

    public function render()
    {
        return view('livewire.tps-list.index');
    }
}
