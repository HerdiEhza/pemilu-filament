<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use App\Models\PasanganCalon;

class PaslonDprdKabKotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get('database/json/PaslonDprdKabKota.json');
        $paslons = json_decode($json, true);

        foreach ($paslons as $paslon) {
            PasanganCalon::query()->updateOrCreate([
                'id' => $paslon['id'],
                'nomor_urut' => $paslon['nomor_urut'],
                'nama_pasangan_calon' => $paslon['nama_pasangan_calon'],
                'jenis_kelamin' => $paslon['jenis_kelamin'],
                'nama_partai_id' => $paslon['nama_partai_id'],
                'data_dapil_id' => $paslon['data_dapil_id'],
                'kategori_pemilu_id' => $paslon['kategori_pemilu_id'],
            ]);
        }
    }
}
