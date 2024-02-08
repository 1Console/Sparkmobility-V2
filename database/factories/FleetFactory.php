<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\TrekkAdmin;
use App\Models\PartnerAdmin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fleet>
 */
class FleetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'name' => fake()->unique()->sentence(6),
                'user_id' => collect(User::all()->modelKeys())->random(),
                'country' => fake()->country(),
                'managers' => [1,2,3][rand(0,1)],
                // $table->string('added_by')->constrained('users')->nullable();
                'administrator_type' => [TrekkAdmin::class,PartnerAdmin::class][rand(0,1)],  
                'location' => fake()->address(),
                'visibility' => ['yes','no'][rand(0,1)],
                'reservation' => ['yes','no'][rand(0,1)],
                'is_docking'=> ['yes','no'][rand(0,1)],
                'is_parking'=> ['yes','no'][rand(0,1)],
                'low_speed_limit'=> rand(1,5),
                'high_speed_limit' => rand(6,10),
        ];
    }
}
