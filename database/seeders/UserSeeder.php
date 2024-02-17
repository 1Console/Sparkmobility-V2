<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rider;
use App\Models\Partner;
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
        // User::create([
        //     'name' => 'Samuel',
        //     'email' => 'adebsholey4real@gmail.com',
        //     'userable_id' => 1,
        //     'userable_type' => TrekkAdmin::class,
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);

        // User::create([
        //     'name' => 'Oreofe',
        //     'email' => 'oreofe@gmail.com',
        //     'userable_id' => 1,
        //     'userable_type' => PartnerAdmin::class,
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),
        // ]);

        $user1 = User::create([
            'name' => 'Samuel',
            'email' => 'adebsholey4real@gmail.com',
            'userable_id' => 1,
            'userable_type' => Rider::class,
            'partner_id' => collect(Partner::all()->modelKeys())->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        Rider::create([
            'name' => $user1->name,
            'email' => $user1->email,
            'phone_number' => '08168509044',
            'gender' => config('enums.gender.male'),
            'nationality' => 'Nigeria',
            'address' => 'Ibadan, Nigeria',
            'community' => 'UI',
            'status' => 1,
            // 'user_id' => $user1->id,
        ]);



        $user2 = User::create([
            'name' => 'Oreofe',
            'email' => 'oreofe@gmail.com',
            'userable_id' => 2,
            'userable_type' => Rider::class,
            'partner_id' =>  collect(Partner::all()->modelKeys())->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        Rider::create([
            'name' => $user2->name,
            'email' => $user2->email,
            'phone_number' => '08168509033',
            'gender' => config('enums.gender.female'),
            'nationality' => 'Nigeria',
            'address' => 'Ibadan, Nigeria',
            'community' => 'UI',
            'status' => 1,
            // 'user_id' => $user2->id,
        ]);


        $user3 =User::create([
            'name' => 'Emmanuel Adebunmi',
            'email' => 'emmanuel@gmail.com',
            'userable_id' => 3,
            'userable_type' => Rider::class,
            'partner_id' =>  collect(Partner::all()->modelKeys())->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        Rider::create([
            'name' => $user3->name,
            'email' => $user3->email,
            'phone_number' => '08168501213',
            'gender' => config('enums.gender.male'),
            'nationality' => 'Nigeria',
            'address' => 'Ibadan, Nigeria',
            'community' => 'UI',
            'status' => 1,
            // 'user_id' => $user3->id,
        ]);

        $user4 = User::create([
            'name' => 'Tosin',
            'email' => 'tosin@gmail.com',
            'userable_id' => 1,
            'userable_type' => TrekkAdmin::class,
            'partner_id' =>  collect(Partner::all()->modelKeys())->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        TrekkAdmin::create([
            'partner_id' => $user4->partner_id,
            'name' => $user4->name,
            'email' => $user4->email,
            'phone' => '08168501231',
            'last_connection' => date('Y-m-d'),
        ]);
        
        $user5 =User::create([
            'name' => 'Bimbo',
            'email' => 'bimbo@gmail.com',
            'userable_id' => 1,
            'userable_type' => PartnerAdmin::class,
            'partner_id' =>  collect(Partner::all()->modelKeys())->random(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
        PartnerAdmin::create([
            'partner_id' => $user5->partner_id,
            'name' => $user5->name,
            'email' => $user5->email,
            'phone' => '08168501231',
            'last_connection' => date('Y-m-d'),
        ]);
      

       
     
    }
}
