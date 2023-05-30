<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndonesiaProvinces extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'indonesia_provinces';

    protected $fillable = [
        'name',
        'meta',
        'code'
    ];

    public function kota() : HasMany
    {
        return $this->HasMany(IndonesiaCities::class);
    }
}
