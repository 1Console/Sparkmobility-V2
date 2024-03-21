<?php

namespace Database\Factories;

use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(10),
            'partner_id' => collect(Partner::all()->modelKeys())->random(),
            'description' => fake()->sentence(),
            'location' => fake()->sentence(),
            'info_title' => fake()->sentence(20),
            'info_link' => fake()->name(),
            'image_path' => 'image.png',
            'notes' => fake()->unique()->sentence(),
            'radius' => rand(10,25),
        ];
    }
}
