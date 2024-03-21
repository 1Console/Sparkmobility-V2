<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PromoReferFriend;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PromoReferFriendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoReferFriend::factory(30)->create();          
    }
}
