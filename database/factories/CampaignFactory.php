<?php

namespace Database\Factories;

use App\Models\Rider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Campaign>
 */
class CampaignFactory extends Factory
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
            'rider_id' => collect(Rider::all()->modelKeys())->random(),
            'send_notifications' => fake()->sentence(),
            'to' => fake()->unique()->name(),
            'message'=> fake()->sentence(), // it has a lot
        ];
    }
}
