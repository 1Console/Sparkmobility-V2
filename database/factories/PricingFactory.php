<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pricing>
 */
class PricingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->sentence(3),
            'description'=>fake()->sentence(),
            'status' => ['Pending','Active'][rand(0,1)],
            'tax_option' => ['Yes','No'][rand(0,1)],
            'billing_unit' => rand(10,20),
            'first_unit_unlock_fee' => rand(100,200),
            'next_unit_fee' => rand(100,200),
            'tax_percentage' => rand(10,70),
            'max_billing_per_ride' => rand(10,15),
            'vehicle_reservation_price' => rand(100,400),
            'is_card_mandatory' => ['Yes','No'][rand(0,1)],
            'is_preauthorized_required' => ['Yes','No'][rand(0,1)],
        ];
    }
}
