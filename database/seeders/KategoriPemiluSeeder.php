<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriPemiluSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoriPemilu = [
            [
                'id' => 1,
                'nama_kategori_pemilu' => 'Pemilihan umum Legislatif DPR RI',
            ],
            [
                'id' => 2,
                'nama_kategori_pemilu' => 'Pemilihan umum Legislatif DPRD Provinsi',
            ],
            [
                'id' => 3,
                'nama_kategori_pemilu' => 'Pemilihan umum Legislatif DPRD Kab/Kota',
            ],
            [
                'id' => 4,
                'nama_kategori_pemilu' => 'Pemilihan umum DPD',
            ],
        ];

        foreach ($kategoriPemilu as $kaPem) {
            \App\Models\KategoriPemilu::create($kaPem);
        }
    }
}
