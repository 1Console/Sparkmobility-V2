<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Partner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromoFlatDiscount>
 */
class PromoFlatDiscountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'user_id' => collect(User::all()->modelKeys())->random(),
            'partner_id' =>[1,2][rand(0,1)],
        ];
    }
}
