<?php

namespace Database\Factories;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type' => ['type1','type2'][rand(0,1)],
            // 'fleet_id' => collect(Fleet::all()->modelKeys())->random(),
            'vehicle_number' => '0'.rand(10,99),
            'mac_id' => ['macid1','macid2','macid3','macid4'][rand(0,3)],
            'description' => fake()->sentence(),
            'imei' => ['imei1','imei2','imei3','imei4'][rand(0,3)],
            'qr_image_path' => 'image.png',
            'location' => fake()->address(),
            'availability_status' => ['Available','Unavailable'][rand(0,1)],
            'flags' => ['stolen','damaged','outofcoverage'][rand(0,2)],
        ];
    }
}
