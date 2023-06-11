<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataDapil extends Model
{
    use HasFactory;

    public $table = 'data_dapils';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_dapil',
        'province_id',
        'cities_id',
        'kategori_pemilu_id',
    ];

    public function user() : HasMany
    {
        return $this->HasMany(User::class);
    }
}
