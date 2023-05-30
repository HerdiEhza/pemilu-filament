<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndonesiaVilages extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'indonesia_villages';

    protected $fillable = [
        'name',
        'meta',
        'code',
        'indonesia_districts_id',
    ];

    public function kecamatan() : BelongsTo
    {
        return $this->belongsTo(IndonesiaDistricts::class);
    }
}
