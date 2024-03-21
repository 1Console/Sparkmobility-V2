<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PromoWalletCredit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoWalletCreditSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoWalletCredit::factory(30)->create();          
    }
}
