<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class PasanganCalon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_pasangan_calon',
        'kategori_pemilu_id',
        'data_partai_id',
        'data_dapil_id',
    ];

    // protected $casts = [
    //     'data_partai_id' => 'array',
    // ];

    public function partais() : BelongsTo
    {
        return $this->belongsTo(DataPartai::class);
    }

    public function dapil() : BelongsTo
    {
        return $this->belongsTo(DataDapil::class, 'data_dapil_id');
    }

    public function perolehanSuara() : HasMany
    {
        return $this->HasMany(TpsResult::class)->where('is_active', true);
    }

    // public function test()
    // {
    //     return $this->perolehanSuara()->toArray();
    // }

    public function kategoriPemilu() : BelongsTo
    {
        return $this->belongsTo(KategoriPemilu::class);
    }
}
