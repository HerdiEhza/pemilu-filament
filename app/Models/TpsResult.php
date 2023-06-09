<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TpsResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasangan_calon_id',
        'nama_pasangan_calon',
        'perolehan_suara',
        'tps_input_id',
    ];

    public function dataInput() : BelongsTo
    {
        return $this->BelongsTo(TpsInput::class);
    }
    public function pasanganCalon() : BelongsTo
    {
        return $this->BelongsTo(PasanganCalon::class);
    }
}