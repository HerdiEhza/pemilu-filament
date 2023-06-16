<?php

namespace Database\Seeders;

use App\Models\DataDapil;
use App\Models\DataTps;
use App\Models\TpsInput;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserTps extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/UserTps.json');
        $tps = json_decode($json, true);

        foreach ($tps as $data) {
            User::query()->updateOrCreate([
                "name" => $data['name'],
                "email" => $data['email'],
                "password" => $data['password'],
                "tps_id" => $data['tps_id'],
                "nomor_ktp" => $data['nomor_ktp'],
                "nomor_hp" => $data['nomor_hp'],
                "is_admin" => $data['is_admin'],
                "data_dapil_id" => $data['data_dapil_id'],
            ]);
        }
    }
}
