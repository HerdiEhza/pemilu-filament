<?php

namespace App\Http\Livewire\TpsList;

use App\Models\TpsInput;
use App\Models\TpsResult;
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
    public $reloadList;
    public $checkList;

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

    public function updatedTpsInput()
    {
        $this->checkList = TpsInput::where('id', '!=', $this->tpsInput->id)->get();
    }
    public function updated()
    {
        $this->checkList = TpsInput::where('id', '!=', $this->tpsInput->id)->get();
    }

    public function reloadList()
    {
        $this->emit('updateList');
    }

    public function aktif(TpsInput $tpsInput): void
    {
        // $this->tpsInput = $tpsInput;

        // $getCheckList = TpsInput::where('id', '!=', $tpsInput->id)->get();
        // $this->checkList = $getCheckList;
        // foreach($this->checkList as $check)
        // {
        //     if($check->is_active == true)
        //     {
        //         $this->dialog()->error(
        //             $title = 'Error !!!',
        //             $description = 'Your profile was not saved'
        //         );
        //     } else {
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
        //     }
        // }
    }

    public function diaktif(TpsInput $tpsInput): void
    {
        $this->dialog()->confirm([
            'title'       => 'Apakah Anda yakin?',
            'description' => 'Mengubah status list input suara menjadi tidak aktif?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Tentu, nonaktifkan iput-an suara',
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
        $this->tpsInput->hasil;

        $hasilData = $this->tpsInput->hasil;

        foreach ($hasilData as $result) {
            $result->pasangan_calon_id = $result->pasangan_calon_id;
            $result->nama_pasangan_calon = $result->nama_pasangan_calon;
            $result->perolehan_suara = $result->perolehan_suara;
            $result->tps_input_id = $result->tps_input_id;
            $result->is_active  = true;
            $result->save();
        }

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

        $hasilData = $this->tpsInput->hasil;

        foreach ($hasilData as $result) {
            $result->pasangan_calon_id = $result->pasangan_calon_id;
            $result->nama_pasangan_calon = $result->nama_pasangan_calon;
            $result->perolehan_suara = $result->perolehan_suara;
            $result->tps_input_id = $result->tps_input_id;
            $result->is_active  = false;
            $result->save();
        }

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
