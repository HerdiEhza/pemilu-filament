<?php

namespace Database\Seeders;

use App\Models\DataDapil;
use App\Models\DataTps;
use App\Models\TpsInput;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class DataTpsInputsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/DataTpsInputs.json');
        $tps = json_decode($json, true);

        foreach ($tps as $data) {
            TpsInput::query()->updateOrCreate([
                "user_id" => $data['user_id'],
                "tps_id" => $data['tps_id'],
                "kategori_pemilu_id" => $data['kategori_pemilu_id'],
                "is_active" => $data['is_active'],
                "data_dapil_id" => $data['data_dapil_id'],
            ]);
        }
    }
}
