<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\TrekkAdmin;
use Illuminate\Support\Str;
use App\Models\PartnerAdmin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Samuel',
            'email' => 'adebsholey4real@gmail.com',
            'userable_id' => 1,
            'userable_type' => TrekkAdmin::class,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'Oreofe',
            'email' => 'oreofe@gmail.com',
            'userable_id' => 1,
            'userable_type' => PartnerAdmin::class,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
     
    }
}
