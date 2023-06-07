<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TpsInput extends Model
{
    use HasFactory;

    public function hasil() : HasMany
    {
        return $this->HasMany(TpsHasil::class);
    }
}
