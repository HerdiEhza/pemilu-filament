<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerolehanSuara extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'result',
        'user_id',
        'kategori_pemilu_id',
    ];

    protected $casts = [
        'result' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategoriPemilu()
    {
        return $this->belongsTo(KategoriPemilu::class);
    }
}
