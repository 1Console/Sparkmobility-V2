<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PromoFlatDiscount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoFlatDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoFlatDiscount::factory(30)->create();          
    }
}
