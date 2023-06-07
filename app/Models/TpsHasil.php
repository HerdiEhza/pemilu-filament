<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TpsHasil extends Model
{
    use HasFactory;

    public function dataInput() : BelongsTo
    {
        return $this->BelongsTo(TpsInput::class);
    }
}
