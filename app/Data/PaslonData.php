<?php

namespace App\Data;

use App\Models\PasanganCalon;
use Livewire\Wireable;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\DataCollection;
use Spatie\LaravelData\Lazy;

class PaslonData extends Data implements Wireable
{
    use WireableData;

    public function __construct(
      public string $paslon_id,
      public string $nama_paslon,
      public string $kategori_pemilu,
      /** @var \App\Data\PerolehanSuaraData[] */
      public DataCollection|Lazy $result
    ) {
    }

    // public static function fromModel(PasanganCalon $paslon)
    // {
    //     return new self(
    //         $paslon->name,
    //         Lazy::create(fn() => PerolehanSuaraData::collection($paslon->result))
    //     );
    // }
}
