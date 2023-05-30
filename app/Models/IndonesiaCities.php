<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndonesiaCities extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'indonesia_cities';

    protected $fillable = [
        'name',
        'meta',
        'code',
        'indonesia_provinces_id',
    ];

    public function provinsi() : BelongsTo
    {
        return $this->belongsTo(IndonesiaProvinces::class);
    }

    public function kecamatan() : HasMany
    {
        return $this->HasMany(IndonesiaDistricts::class);
    }
}
