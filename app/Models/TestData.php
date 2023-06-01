<?php

namespace App\Models;

use App\Data\TestData as DataTestData;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\DataCollection;

class TestData extends Model
{
    use HasFactory;

    public $table = 'perolehan_suaras';

    protected $casts = [
        'result' => 'array',
        // 'result' => DataTestData::class,
        // 'result' => DataCollection::class.':'.DataTestData::class,
    ];

    protected $fillable = [
        'user_id',
        'tps_id',
        'kategori_pemilu_id',
        // 'paslon_id',
        // 'kategori_pemilu',
        'result',
    ];

    public function kategoriPemilu()
    {
        return $this->belongsTo(KategoriPemilu::class);
    }
}
