<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndonesiaDistricts extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'indonesia_districts';

    protected $fillable = [
        'name',
        'meta',
        'code',
        'indonesia_cities_id',
    ];

    public function kota() : BelongsTo
    {
        return $this->belongsTo(IndonesiaCities::class);
    }

    public function desa() : HasMany
    {
        return $this->HasMany(IndonesiaVilages::class);
    }
}
