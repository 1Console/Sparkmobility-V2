<?php

namespace Database\Factories;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->unique()->sentence(3),
            'description' => fake()->sentence(),
            'location' => fake()->address(),
            'start_time' =>  date('Y-m-d H:i:s', strtotime(['2021-01-11','2021-03-12'][rand(0,1)])),
            'end_time' =>  date('Y-m-d H:i:s', strtotime(['2023-01-11','2023-03-12'][rand(0,1)])),
            'category' => ['category1', 'category2'][rand(0,1)],
            'website' => fake()->title(),
            'status' => ['active', 'inactive'][rand(0,1)],
            'image_path' => 'image.png',
            'notes' => fake()->sentence(),
            'radius' => rand(2,10),
            'thumbnail_image_path' => 'image.png',
            'fleet_id' => collect(Fleet::all()->modelKeys())->random(),
        ];
    }
}
