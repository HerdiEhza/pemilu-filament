<?php

namespace App\Http\Livewire;

use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\PerolehanSuara;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class InputDataSuara_old extends Component
{
    public $currentStep = 1;
    public $user_id;
    public $kategori_pemilu_id;
    public $result = [];
    public $status = 1;
    public $successMsg = '';

    public function firstStepSubmit()
    {
        $validatedData = $this->validate([
            // 'user_id' => 'required',
            'kategori_pemilu_id' => 'required',
        ]);

        $this->currentStep = 2;
    }

    /**
     * Write code on Method
     */
    public function secondStepSubmit()
    {
        $validatedData = $this->validate([
            'result' => 'required, array',
        ]);

        $this->currentStep = 3;
    }

    public function assignResult()
    {
        foreach($this->result as $resultId => $testResult)
        {
            InputDataSuara::find($resultId)->update(['result' => $testResult]);
        }
    }

    /**
     * Write code on Method
     */
    public function submitForm()
    {
        // $userId = Auth::id();

        PerolehanSuara::create([
            'user_id' => auth()->id() ?? null,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'result' => $this->result,
            // 'result' => json_encode($this->result),
            // 'result' => array(
            //     'paslon_id' => $this->paslon_id,
            //     'perolehan_suara' => $this->perolehan_suara,
            // ),
            // 'result' => array(
            //     'paslon_id' => $this->result['paslon_id'],
            //     'perolehan_suara' => $this->result['perolehan_suara'],
            // ),
        ]);


        // foreach($this->result as $simpanData->id => $testResult)
        // {
        //     InputDataSuara::find($simpanData->id)->update(['result' => $testResult]);
        // }

        $this->successMsg = 'Team successfully created.';

        $this->clearForm();

        $this->currentStep = 1;
    }

    /**
     * Write code on Method
     */
    public function back($step)
    {
        $this->currentStep = $step;
    }

    /**
     * Write code on Method
     */
    public function clearForm()
    {
        $this->user_id = '';
        $this->kategori_pemilu_id = '';
        $this->result = '';
    }

    // protected function rules(): array
    // {
    //     return [
    //         'user_id' => 'required',
    //         'kategori_pemilu_id' => 'required',
    //         'result.data.paslon_id' => 'required',
    //         'result.data.perolehan_suara' => 'required',
    //     ];
    // }

    public function render()
    {
        $checkInputSuara = DB::table('perolehan_suaras')->where('user_id', Auth::id())->select('kategori_pemilu_id');

        $kategoriPemilus = DB::table('kategori_pemilus')
                            ->whereNotIn('id', $checkInputSuara)
                            ->get();

        $fetchPaslon = PasanganCalon::where('kategori_pemilu_id', $this->kategori_pemilu_id)->get();
        $fetchPartai = DataPartai::all();
        // $checkInputSuara = DB::table('input_data_suaras')->where('user_id', Auth::id())->select('kategori_pemilu_id');

        return view('livewire.input-data-suara', compact('kategoriPemilus', 'fetchPaslon', 'fetchPartai', 'checkInputSuara'));
    }
}
