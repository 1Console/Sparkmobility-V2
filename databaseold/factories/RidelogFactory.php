<?php

namespace Database\Factories;

use App\Models\Ride;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ridelog>
 */
class RidelogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'time' => date('Y-m-d H:i:s', strtotime(['2015-10-11','2015-10-12'][rand(0,1)])),
            'amount' => [100,200,300,400,500][rand(0,4)],
            'pause_duration' => rand(10,40),
            'ride_id' =>  collect(Ride::all()->modelKeys())->random(),
        ];
    }
}
