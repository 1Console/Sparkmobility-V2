<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Partner;
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
                'partner_id' => collect(Partner::all()->modelKeys())->random(),
                'user_id' => collect(User::all()->modelKeys())->random(),
                'country' => fake()->country(),
                'managers' => [1,2,3][rand(0,1)],
                // $table->string('added_by')->constrained('users')->nullable();  
                // 'administrator_type' => [TrekkAdmin::class,PartnerAdmin::class][rand(0,1)], //we removed this because we can assign a fleet to more than 1 administrator...the partner id already tells us the company who owns the fleet - that's enough  
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
