<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class PasanganCalon extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nama_pasangan_calon',
        'kategori_pemilu_id',
        'nama_partai_id',
    ];

    protected $casts = [
        'nama_partai_id' => 'array',
    ];

    public function partais() : BelongsToMany
    {
        return $this->belongsToMany(DataPartai::class);
    }

    public function kategoriPemilu() : BelongsTo
    {
        return $this->belongsTo(KategoriPemilu::class);
    }
}
