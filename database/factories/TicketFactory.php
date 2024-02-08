<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Rider;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'status' => ['active','inactive'][rand(0,1)],
                'title' => fake()->title(),
                'body' => fake()->sentence(),
                'rider_id' => collect(Rider::all()->modelKeys())->random(),
                'vehicle_id' => collect(Vehicle::all()->modelKeys())->random(),
                'user_id' => collect(User::all()->modelKeys())->random(), //trekk admin
                'photo_path' => 'image.png',
                'reply_message' => fake()->sentence(),
        ];
    }
}
