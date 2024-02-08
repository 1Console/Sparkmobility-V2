<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rider>
 */
class RiderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->unique()->firstName(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'gender' => ['male','female'][rand(0,1)],
            'nationality'=> fake()->country(),
            'address' => fake()->address(),
            'community'=> ['UI','Bodija Estate','Mokola'][rand(0,2)],
            'status' => ['active','inactive'][rand(0,1)],
            'user_id' => collect(User::all()->modelKeys())->random(),
        ];
    }
}
