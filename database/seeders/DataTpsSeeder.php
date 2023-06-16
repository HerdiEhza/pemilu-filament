<?php

namespace Database\Seeders;

use App\Models\DataDapil;
use App\Models\DataTps;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DataTpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/DataTps.json');
        $tps = json_decode($json, true);

        foreach ($tps as $data) {
            DataTps::query()->updateOrCreate([
                "nama_tps" => $data['nama_tps'],
                "provinsi_id" => $data['provinsi_id'],
                "kabupaten_kota_id" => $data['kabupaten_kota_id'],
                "kecamatan_id" => $data['kecamatan_id'],
                "kelurahan_desa_id" => $data['kelurahan_desa_id'],
            ]);
        }
    }
}
