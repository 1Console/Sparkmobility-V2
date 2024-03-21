<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // public function run(): void
    // {
    //     // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',

    public function run()
    {
        $this->call([
            PartnerSeeder::class,
            UserSeeder::class,
            // PartnerAdminSeeder::class,
            // TrekkAdminSeeder::class,
            FleetSeeder::class,
            VehicleSeeder::class,
            // RiderSeeder::class,
            RideSeeder::class,
            PricingSeeder::class,
            TicketSeeder::class,
            CommandListSeeder::class,
            CommandSeeder::class,
            OfferSeeder::class,
            BannerSeeder::class,
            CampaignSeeder::class,
            PromoFreePassSeeder::class,
            PromoFreeRideSeeder::class,
            PromoFlatDiscountSeeder::class,
            PromoPercentageDiscountSeeder::class,
            PromoReferFriendSeeder::class,
            PromoWalletCreditSeeder::class,
            TicketLogSeeder::class,
            RidelogSeeder::class,
        ]);
    }
}
