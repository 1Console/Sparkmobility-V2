<?php

namespace Database\Seeders;

use App\Models\Ridelog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RidelogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ridelog::factory(700)->create();
    }
}
