<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataTps extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'data_tps';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'nama_tps',
        'provinsi_id',
        'kabupaten_kota_id',
        'kecamatan_id',
        'kelurahan_desa_id',
    ];

    public function user() : HasMany
    {
        return $this->HasMany(User::class);
    }

    public function provinsi() : BelongsTo
    {
        return $this->belongsTo(IndonesiaProvinces::class);
    }

    public function kabupatenKota() : BelongsTo
    {
        return $this->belongsTo(IndonesiaCities::class);
    }

    public function kecamatan() : BelongsTo
    {
        return $this->belongsTo(IndonesiaDistricts::class);
    }

    public function kelurahanDesa() : BelongsTo
    {
        return $this->belongsTo(IndonesiaVilages::class);
    }

    public function hasilSuara() : HasMany
    {
        return $this->HasMany(TpsResult::class, 'tps_id');
    }
}