<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        $this->call([
            // ProvincesSeeder::class,
            // CitiesSeeder::class,
            // DistrictsSeeder::class,
            // VillagesSeeder::class,
            WilayahSeeder::class,
            DataPemiluSeeder::class,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Herdi',
            'email' => 'marketing@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 1,
            'nomor_ktp' => '6118476830904',
            'nomor_hp' => '08967273567',
            'is_admin' => true
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 1,
            'nomor_ktp' => '6118478970904',
            'nomor_hp' => '08967265567',
            'is_admin' => false
        ]);

        \App\Models\User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@dku.id',
            'password' => Hash::make('Mekikau19'),
            'tps_id' => 2,
            'nomor_ktp' => '6118478830963',
            'nomor_hp' => '08967235567',
            'is_admin' => false
        ]);
    }
}
