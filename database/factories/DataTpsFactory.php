<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DataTps>
 */
class DataTpsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_tps' => 'TPS'.fake()->numberBetween(1, 14),
            'provinsi_id' => '1',
            'kabupaten_kota_id' => fake()->numberBetween(1, 14),
            'kecamatan_id' => fake()->numberBetween(1, 174),
            'kelurahan_desa_id' => fake()->numberBetween(1, 2123),
            'data_dapil_id' => fake()->numberBetween(1, 14),
        ];
    }
}
