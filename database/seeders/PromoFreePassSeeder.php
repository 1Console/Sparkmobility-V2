<?php

namespace Database\Seeders;

use App\Models\PromoFreePass;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoFreePassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       PromoFreePass::factory(30)->create();           
    }
}
