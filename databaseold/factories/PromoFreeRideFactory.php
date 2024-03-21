<?php

namespace Database\Factories;

use App\Models\Fleet;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromoFeeRide>
 */
class PromoFreeRideFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->name(),
            'description' => fake()->sentence(),
            'start_time' =>  date('Y-m-d H:i:s', strtotime(['2021-01-11','2021-03-12'][rand(0,1)])),
            'end_time' =>  date('Y-m-d H:i:s', strtotime(['2023-01-11','2023-03-12'][rand(0,1)])),
            'query_string' => Str::random(20),
            'fleet_id' => collect(Fleet::all()->modelKeys())->random(),
            'max_used' => rand(10,20),
            'max_single_used' => rand(10,20),
            'daily_used' => rand(2,9),
            'show_on_map' => ['yes','no'][rand(0,1)],
            'promo_code' => ['promo1','promo2','promo3'][rand(0,2)],
            'usage_validity' => ['active','inactive'][rand(0,1)],
        ];
    }
}
