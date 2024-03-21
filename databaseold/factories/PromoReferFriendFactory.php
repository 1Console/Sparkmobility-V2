<?php

namespace Database\Factories;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PromoReferFriend>
 */
class PromoReferFriendFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sender_in_app_description'=>fake()->sentence(),
            'receiver_message_description'=>fake()->sentence(),
            'status' => ['active','inactive'][rand(0,1)],
            'receiver_promo_type' => ['receiver_promo1','receiver_promo2','receiver_promo1'][rand(0,2)],
            'sender_promo_type' => ['sender_promo1','sender_promo2','sender_promo1'][rand(0,2)],
            'receiver_amount' => rand(200,1000),
            'sender_amount' => rand(200,1000),
            'fleet_id' => collect(Fleet::all()->modelKeys())->random(),
        ];
    }
}
