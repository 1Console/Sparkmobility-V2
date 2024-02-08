<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Rider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketLog>
 */
class TicketLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->title(),
            'rider_id' => collect(Rider::all()->modelKeys())->random(),
            'user_id' => collect(User::all()->modelKeys())->random(),
            'body' => fake()->sentence(),
            'location' => fake()->address(),
            'start_time' =>  date('Y-m-d H:i:s', strtotime(['2021-01-11','2021-03-12'][rand(0,1)])),
            'end_time' =>  date('Y-m-d H:i:s', strtotime(['2023-01-11','2023-03-12'][rand(0,1)])),
            'category' => ['cat1','cat2','cat3'][rand(0,2)],
            'website' => fake()->sentence(),
            'status' => ['active','inactive'][rand(0,1)],
            'image_path' => 'image.png',
            'notes' => fake()->sentence(),
            'radius' => rand(10,20),
            'thumbnail_image_path' => 'image.png',
        ];
    }
}
