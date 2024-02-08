<?php

namespace Database\Seeders;

use App\Models\PromoFreeRide;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoFreeRideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       PromoFreeRide::factory(30)->create();          
    }
}
