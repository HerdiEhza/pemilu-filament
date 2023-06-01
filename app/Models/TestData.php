<?php

namespace App\Models;

use App\Data\TestData as DataTestData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\DataCollection;

class TestData extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'tps_id',
        'kategori_pemilu_id',
        'paslon_id',
        'nama_paslon',
        'kategori_pemilu',
        'result',
    ];

    protected $casts = [
        // 'result' => DataTestData::class,
        'result' => DataCollection::class.':'.DataTestData::class,
    ];
}
