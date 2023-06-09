<?php

namespace Database\Factories;

use App\Models\DataTps;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            // 'locale' => ,
            'akun_google' => fake()->unique()->safeEmail(),
            'nomor_hp' => fake()->e164PhoneNumber(),
            'nomor_ktp' => fake()->numberBetween(),
            'alamat' => fake()->address(),
            // 'tps_id' => DataTps::all()->random()->id,
            'tps_id' => fake()->numberBetween(1, 16499),
            'data_dapil_id' => fake()->numberBetween(1, 14),
        ];
    }
}