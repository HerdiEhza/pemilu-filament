<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        return $this->HasMany(TpsHasil::class);
    }
}
