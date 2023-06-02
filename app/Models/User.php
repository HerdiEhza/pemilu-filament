<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'locale',
        'akun_google',
        'nomor_hp',
        'nomor_ktp',
        'alamat',
        'tps_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function author() : BelongsTo
    {
        return $this->BelongsTo(DataTps::class);
    }

    public function canAccessFilament(): bool
    {
        // return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
        return str_ends_with($this->email, '@dku.id');
    }

    public function tps() : BelongsTo
    {
        return $this->BelongsTo(DataTps::class);
    }
}
