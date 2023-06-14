<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriPemilu;
use Database\Factories\TpsFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
use Laravolt\Indonesia\Seeds\VillagesSeeder;
use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $totalTps = '16499';


        $this->call([
            // ProvincesSeeder::class,
            // CitiesSeeder::class,
            // DistrictsSeeder::class,
            // VillagesSeeder::class,
            WilayahSeeder::class,
            KategoriPemiluSeeder::class,
            DataDapilSeeder::class,
            DataPemiluSeeder::class,
            PaslonDprdProvinsiSeeder::class,
            PaslonDprdKabKotaSeeder::class,
        ]);

        \App\Models\DataTps::factory(16499)->create();
        \App\Models\User::factory(16499)->create();

        \App\Models\User::create([
            'name' => 'Herdi',
            'email' => 'marketing@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 1,
            'nomor_ktp' => '6118476830904',
            'nomor_hp' => '08967273567',
            'is_admin' => true,
            'data_dapil_id' => 63
        ]);

        \App\Models\User::create([
            'name' => 'user1',
            'email' => 'user1@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 1,
            'nomor_ktp' => '6118478970904',
            'nomor_hp' => '08967265567',
            'is_admin' => false,
            'data_dapil_id' => 63
        ]);

        \App\Models\User::create([
            'name' => 'user2',
            'email' => 'user2@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 2,
            'nomor_ktp' => '6118478830963',
            'nomor_hp' => '08967235567',
            'is_admin' => false,
            'data_dapil_id' => 63
        ]);

        $users = \App\Models\User::all();
        
        foreach($users as $user)
        {
              
        }
        $master = ModelsTpsInput::create([
            'user_id' => Auth::id(),
            'tps_id' => Auth::user()->tps_id,
            'kategori_pemilu_id' => $this->kategori_pemilu_id,
            'data_dapil_id' => $this->data_dapil_id,
        ]);

        foreach ($this->result as $index => $result) {
            foreach ($paslonData as $paslon) {
                if ($index == $paslon->id) {
                    TpsResult::create([
                        'tps_id' => Auth::user()->tps_id,
                        'tps_provinsi_id' => Auth::user()->tps->provinsi_id,
                        'tps_kab_id' => Auth::user()->tps->kabupaten_kota_id,
                        'tps_kec_id' => Auth::user()->tps->kecamatan_id,
                        'tps_kel_id' => Auth::user()->tps->kelurahan_desa_id,
                        'pasangan_calon_id' => $paslon->id,
                        'kategori_pemilu_id' => $this->kategori_pemilu_id,
                        'data_dapil_id' => $paslon->data_dapil_id,
                        'nama_pasangan_calon' => $paslon->nama_pasangan_calon,
                        'data_partai_id' => $paslon->nama_partai_id,
                        'perolehan_suara' => $result['perolehan_suara'] ?? '0',
                        'tps_input_id' => $master->id,
                        'is_active	' => true
                    ]);
                }
            }
        };
    }
}
