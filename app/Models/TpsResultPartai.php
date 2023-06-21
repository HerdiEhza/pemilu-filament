<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TpsResultPartai extends Model
{
    use HasFactory;

    protected $fillable = [
        'tps_id',
        'tps_provinsi_id',
        'tps_kab_id',
        'tps_kec_id',
        'tps_kel_id',
        'nama_partai',
        'data_partai_id',
        'perolehan_suara',
        'tps_input_id',
        'kategori_pemilu_id',
    ];

    public function tps() : BelongsTo
    {
        return $this->BelongsTo(DataTps::class);
    }
    public function dataInput() : BelongsTo
    {
        return $this->BelongsTo(TpsInput::class);
    }
    public function partaiCalon() : BelongsTo
    {
        return $this->BelongsTo(DataPartai::class);
    }
    // public function dapils() : BelongsTo
    // {
    //     return $this->BelongsTo(DataDapil::class, 'data_dapil_id');
    // }
}
