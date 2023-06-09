<?php

namespace App\Http\Livewire;

use App\Data\PaslonData;
use App\Data\PerolehanSuaraData;
use App\Models\DataPartai;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\PerolehanSuara;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class InputDataSuara extends Component
{
    public $currentStep = 1;
    public $user_id;
    public $paslon_id;
    public $nama_paslon;
    public $kategori_pemilu_id;
    public $perolehan_suara;
    public $status = 1;
    public $successMsg = '';

    public PerolehanSuaraData $dataSuara;

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

        $paslon = PasanganCalon::create([
            'paslon_id' => $this->paslon_id,
            'nama_paslon' => $this->nama_paslon,
            'kategori_pemilu' => $this->kategori_pemilu_id,
        ]);
        
        $paslon->result()->create([        
            [
                'user_id' => auth()->id() ?? null,
                'tps_id' => auth()->user()->tps_id ?? null,
                'perolehan_suara' => $this->perolehan_suara,
                'created_at' => Carbon::now(),
            ]
        ]);
        
        PaslonData::from($paslon);

        // PerolehanSuara::create([
        //     'user_id' => auth()->id() ?? null,
        //     'kategori_pemilu_id' => $this->kategori_pemilu_id,
        //     'result' => $this->result,
        //     // 'result' => json_encode($this->result),
        //     // 'result' => array(
        //     //     'paslon_id' => $this->paslon_id,
        //     //     'perolehan_suara' => $this->perolehan_suara,
        //     // ),
        //     // 'result' => array(
        //     //     'paslon_id' => $this->result['paslon_id'],
        //     //     'perolehan_suara' => $this->result['perolehan_suara'],
        //     // ),
        // ]);


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
        // $this->result = '';
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
