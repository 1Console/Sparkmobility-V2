<?php

namespace Database\Factories;

use App\Models\CommandList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Command>
 */
class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'command_id' => collect(CommandList::all()->modelKeys())->random(),
            'type' => ['active','inactive'][rand(0,1)], 
            'associated_ids'=>rand(1,20),
        ];
    }
}
