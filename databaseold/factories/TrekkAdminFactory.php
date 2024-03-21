<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrekkAdmin>
 */
class TrekkAdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //not used for now
        return [
            // 'name' => fake()->firstName(),
            // 'phone' => fake()->phoneNumber(),
            // 'email' => fake()->unique()->safeEmail(),
            // // 'user_id' => collect(User::all()->modelKeys())->random(),
            // 'last_connection' => date('Y-m-d H:i:s'),
        ];
    }
}
