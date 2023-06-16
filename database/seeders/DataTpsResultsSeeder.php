<?php

namespace Database\Seeders;

use App\Models\DataDapil;
use App\Models\DataTps;
use App\Models\TpsResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DataTpsResultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/DataTpsResults.json');
        $tps = json_decode($json, true);

        foreach ($tps as $data) {
            TpsResult::query()->updateOrCreate([
                "tps_id" => $data['tps_id'],
                "tps_provinsi_id" => $data['tps_provinsi_id'],
                "tps_kab_id" => $data['tps_kab_id'],
                "tps_kec_id" => $data['tps_kec_id'],
                "tps_kel_id" => $data['tps_kel_id'],
                "pasangan_calon_id" => $data['pasangan_calon_id'],
                "nama_pasangan_calon" => $data['nama_pasangan_calon'],
                "perolehan_suara" => $data['perolehan_suara'],
                "tps_input_id" => $data['tps_input_id'],
                "data_partai_id" => $data['data_partai_id'],
                "is_active" => $data['is_active'],
                "data_dapil_id" => $data['data_dapil_id'],
                "kategori_pemilu_id" => $data['kategori_pemilu_id'],
            ]);
        }
    }
}
