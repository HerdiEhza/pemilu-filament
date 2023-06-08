<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TpsInput extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tps_id',
        'kategori_pemilu_id',
    ];

    public function hasil() : HasMany
    {
        return $this->HasMany(TpsResult::class);
    }

    public function kategoriPemilu() : BelongsTo
    {
        return $this->BelongsTo(KategoriPemilu::class);
    }

    public function tps() : BelongsTo
    {
        return $this->BelongsTo(DataTps::class);
    }
}
