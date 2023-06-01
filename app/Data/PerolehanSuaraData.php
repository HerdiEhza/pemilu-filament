<?php

namespace App\Data;

use Carbon\CarbonImmutable;
use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class PerolehanSuaraData extends Data implements Wireable
{
    use WireableData;

    public function __construct(
      public string $user_id,
      public string $tps_id,
      public string $perolehan_suara,
      public ?CarbonImmutable $created_at
    ) {
    }
}
