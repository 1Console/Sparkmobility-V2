<?php

namespace Database\Factories;

use App\Models\Fleet;
use App\Models\Rider;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ride>
 */
class RideFactory extends Factory
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
            'duration' => rand(20000,100000),
            'rider_id' => collect(Rider::all()->modelKeys())->random(),
            'start_time' => date('Y-m-d H:i:s', strtotime(['2015-10-11','2015-10-12'][rand(0,1)])),
            'end_time' => date('Y-m-d H:i:s', strtotime(['2023-01-11','2023-03-12'][rand(0,1)])),
            'start_location' => fake()->address(),
            'end_location' => fake()->address(),
            'pause_duration' => rand(10,20),
            'vehicle_id' => collect(Vehicle::all()->modelKeys())->random(),
            'fleet_id' => collect(Fleet::all()->modelKeys())->random(),
            'unlock_fee' => 100,
            'price' => [100,200,300,400,500][rand(0,4)],
        ];
    }
}
