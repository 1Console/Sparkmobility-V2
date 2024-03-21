<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PromoPercentageDiscount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoPercentageDiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoPercentageDiscount::factory(30)->create();          
    }
}
