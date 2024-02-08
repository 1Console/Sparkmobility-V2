<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PartnerAdmin>
 */
class PartnerAdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'company_name' => fake()->company(),
            'company_phone' => fake()->phoneNumber(),
            'agent_name' => fake()->unique()->firstName(),
            'cac_document_path' => 'image.png',
            'company_email' => fake()->unique()->safeEmail(),
            // 'user_id' => collect(User::all()->modelKeys())->random(),
            'last_connection' => date('Y-m-d H:i:s'),
        ];
    }
}
