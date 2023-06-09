<?php

namespace App\Http\Livewire;

use App\Models\DataPartai;
use Livewire\Component;
use App\Models\KategoriPemilu;
use App\Models\PasanganCalon;
use App\Models\TpsInput as ModelsTpsInput;
use App\Models\TpsResult;
use App\Models\TpsResultPartai;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Validator;

use Filament\Notifications\Notification;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class TpsInput extends Component
{
    use WithFileUploads, Actions;

    // public $currentStep = 3;
    public $currentStep = 1;

    public $paslons;
    public $kategori_pemilu_id;
    public $data_dapil_id;
    public $result = [];
    public $resultPartai = [];
    public $photo;

    // protected $rules = [
    //     'kategori_pemilu_id' => 'required|email',
    // ];

    // protected $messages = [
    //     'kategori_pemilu_id.required' => 'Harap pilih Kategori PEMILU terlebih dahulu.',
    // ];

    public function dialog()
    {
        $this->dialog()->confirm([
            'title'       => __('bap.are_you_sure'),
            'description' => 'Delete this user?',
            'icon'        => 'question',
            'accept'      => [
                'label'  => 'Yes, delete it',
                'method' => 'submitForm',
                'color' => 'negative',
            ],
            'reject' => [
                'label'  => __('bap.cancel'),
                'method' => 'cancelledDelete',
            ],
        ]);
    }

    public function cancelledDelete()
    {
        $this->notification([
            'title'       => 'User not deleted!',
            'icon'        => 'warning'
        ]);
    }

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
        $this->data_dapil_id = Auth::user()->data_dapil_id;
        // $this->paslons = DB::table('pasangan_calons')->select('id','nama_pasangan_calon','data_partai_id','kategori_pemilu_id', 'data_dapil_id')->where(
        //         'kategori_pemilu_id', $this->kategori_pemilu_id
        //     )->where(
        //         'data_dapil_id', $this->data_dapil_id
        //     )->get();

        $this->paslons =  PasanganCalon::select('id','nama_pasangan_calon','data_partai_id','kategori_pemilu_id', 'data_dapil_id')->where(
                'kategori_pemilu_id', $this->kategori_pemilu_id
            )->where(
                'data_dapil_id', $this->data_dapil_id
            )->get();

            // dd($this->paslons);

    }

    public function updated()
    {
        $this->data_dapil_id = Auth::user()->data_dapil_id;
        // $this->paslons = DB::table('pasangan_calons')->select('id','nama_pasangan_calon','data_partai_id','kategori_pemilu_id', 'data_dapil_id')->where(
        //         'kategori_pemilu_id', $this->kategori_pemilu_id
        //     )->where(
        //         'data_dapil_id', $this->data_dapil_id
        //     )->get();
        $this->paslons =  PasanganCalon::select('id','nama_pasangan_calon','data_partai_id','kategori_pemilu_id', 'data_dapil_id')->where(
            'kategori_pemilu_id', $this->kategori_pemilu_id
            )->where(
                'data_dapil_id', $this->data_dapil_id
            )->get();
    }

    public function submitForm()
    {
        // $this->validate([
        //     'photo' => 'image|max:1024',
        // ]);

        // $paslonData = PasanganCalon::select('id','nama_pasangan_calon', 'data_partai_id', 'data_dapil_id')->get();
        $partaiData = DB::table('data_partais')->select('id','nama_partai')->get();
        $paslonData = DB::table('pasangan_calons')->select('id','nama_pasangan_calon', 'data_partai_id', 'data_dapil_id')->get();
        $namaKategoriPemilu = KategoriPemilu::select('id','nama_kategori_pemilu')->where('id', $this->kategori_pemilu_id)->first();

        $master = ModelsTpsInput::create([
            'user_id' => Auth::id(),
            'tps_id' => Auth::user()->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'data_dapil_id' => $this->data_dapil_id,
        ]);

        foreach ($this->resultPartai as $index => $resultP) {
            foreach ($partaiData as $partai) {
                if ($index == $partai->id) {
                    TpsResultPartai::create([
                        'tps_id' => Auth::user()->tps_id,
                        'tps_provinsi_id' => Auth::user()->tps->provinsi_id,
                        'tps_kab_id' => Auth::user()->tps->kabupaten_kota_id,
                        'tps_kec_id' => Auth::user()->tps->kecamatan_id,
                        'tps_kel_id' => Auth::user()->tps->kelurahan_desa_id,
                        'kategori_pemilu_id' => $this->kategori_pemilu_id,
                        'nama_partai' => $partai->nama_partai,
                        'data_partai_id' => $partai->id,
                        'perolehan_suara' => $resultP['perolehan_suara'] ?? '0',
                        'tps_input_id' => $master->id,
                        'is_active	' => true
                    ]);
                }
            }
        }

        foreach ($this->result as $index => $result) {
            foreach ($paslonData as $paslon) {
                if ($index == $paslon->id) {
                    TpsResult::create([
                        'tps_id' => Auth::user()->tps_id,
                        'tps_provinsi_id' => Auth::user()->tps->provinsi_id,
                        'tps_kab_id' => Auth::user()->tps->kabupaten_kota_id,
                        'tps_kec_id' => Auth::user()->tps->kecamatan_id,
                        'tps_kel_id' => Auth::user()->tps->kelurahan_desa_id,
                        'pasangan_calon_id' => $paslon->id,
                        'kategori_pemilu_id' => $this->kategori_pemilu_id,
                        'data_dapil_id' => $paslon->data_dapil_id,
                        'nama_pasangan_calon' => $paslon->nama_pasangan_calon,
                        'data_partai_id' => $paslon->data_partai_id,
                        'perolehan_suara' => $result['perolehan_suara'],
                        'tps_input_id' => $master->id,
                        'is_active	' => true
                    ]);
                }
            }
        }

        $this->clearForm();
        $this->currentStep = 1;
        $this->emit('updateListSuara');

        // $recipient = auth()->user();
        $recipient = User::where('is_admin', true)->get();
        Notification::make()
            ->title('Perhitungan suara masuk'.' | '.Auth::user()->tps->nama_tps)
            ->body('Diinput oleh: '.Auth::user()->name.' | '.$namaKategoriPemilu->nama_kategori_pemilu)
            ->sendToDatabase($recipient);
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
        $partais = DataPartai::select('id', 'nama_partai', 'logo_partai')->get();

        return view('livewire.tps-input', compact('kategoriP', 'partais'));
    }
}
