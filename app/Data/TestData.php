<?php

namespace App\Data;

use Livewire\Wireable;
use Spatie\LaravelData\Concerns\WireableData;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TestData extends Data implements Wireable
{
    use WireableData;

    public function __construct(
        public string $paslon_id,
        public string $nama_paslon,
        // public string $kategori_pemilu_id,
        public string $perolehan_suara,
        //   /** @var \App\Data\PostData[] */
        // public DataCollection $result
    ) {
    }
}
