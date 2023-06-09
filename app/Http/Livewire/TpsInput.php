<?php

namespace App\Http\Livewire;

use App\Models\DataPartai;
use Livewire\Component;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TpsInput as ModelsTpsInput;
use App\Models\TpsResult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

class TpsInput extends Component
{
    public $currentStep = 1;

    public $paslons;
    public $kategori_pemilu_id;
    public $result = [];

    // protected $rules = [
    //     'kategori_pemilu_id' => 'required|email',
    // ];

    // protected $messages = [
    //     'kategori_pemilu_id.required' => 'Harap pilih Kategori PEMILU terlebih dahulu.',
    // ];

    public function firstStepSubmit()
    {
        // $validatedData = $this->validate([
        //     'kategori_pemilu_id' => 'required',
        // ]);

        $this->currentStep = 2;
    }

    public function secondStepSubmit()
    {
        $validatedData  = $this->validate([
        //     'result' => 'required, array',
            'kategori_pemilu_id' => 'required',
        ]);

        $this->currentStep = 3;
    }

    public function back($step)
    {
        $this->currentStep = $step;
    }

    public function mount()
    {
        $this->paslons =  PasanganCalon::select('id','nama_pasangan_calon','nama_partai_id','kategori_pemilu_id')->where('kategori_pemilu_id', $this->kategori_pemilu_id)->get();
    }

    public function updated()
    {
        $this->paslons =  PasanganCalon::select('id','nama_pasangan_calon','nama_partai_id','kategori_pemilu_id')->where('kategori_pemilu_id', $this->kategori_pemilu_id)->get();
    }

    public function submitForm()
    {
        $paslonData = PasanganCalon::select('id','nama_pasangan_calon')->get();

        $master = ModelsTpsInput::create([
            'user_id' => Auth::id(),
            'tps_id' => Auth::user()->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
        ]);

        foreach ($this->result as $index => $result) {
            foreach ($paslonData as $paslon) {
                if ($index == $paslon->id) {
                    TpsResult::create([
                        'pasangan_calon_id' => $paslon->id,
                        'nama_pasangan_calon' => $paslon->nama_pasangan_calon,
                        'perolehan_suara' => $result['perolehan_suara'] ?? '0',
                        'tps_input_id' => $master->id,
                        'is_active	' => true
                    ]);
                }
            }
        }

        $this->clearForm();

        // $this->emitTo('DashboardPerolehanSuara', 'updateList');

        $this->currentStep = 1;
        // $this->emitTo('dashboard-perolehan-suara', 'updateListSuara');
        $this->emit('updateListSuara');
    }

    public function clearForm()
    {
        $this->result = [];
        $this->kategori_pemilu_id = '';
    }

    public function render()
    {
        // $checkInputSuara = DB::table('tps_inputs')->where('is_active', true)->get();
        $checkInputSuara = DB::table('tps_inputs')->where('user_id', Auth::id())->where('is_active', true)->select('kategori_pemilu_id');

        $kategoriP = DB::table('kategori_pemilus')
                        ->whereNotIn('id', $checkInputSuara)
                        ->get();

        // $kategoriP = KategoriPemilu::select('id','nama_kategori_pemilu')->get();
        $partais = DataPartai::select('id', 'nama_partai')->get();

        return view('livewire.tps-input', compact('kategoriP', 'partais'));
    }
}
