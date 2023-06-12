<?php

namespace Database\Seeders;

use App\Models\DataDapil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DataDapilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/DataDapil.json');
        $dapils = json_decode($json, true);

        foreach ($dapils as $dapil) {
            DataDapil::query()->updateOrCreate([
                'id' => $dapil['id'],
                'nama_dapil' => $dapil['nama_dapil'],
                'province_id' => $dapil['province_id'],
                'kategori_pemilu_id' => $dapil['kategori_pemilu_id'],
            ]);
        }
    }
}
