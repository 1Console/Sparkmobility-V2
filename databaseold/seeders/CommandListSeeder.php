<?php

namespace Database\Seeders;

use App\Models\CommandList;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommandListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       CommandList::factory(20)->create();   
    }
}
