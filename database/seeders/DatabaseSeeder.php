<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\RideSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\FleetSeeder;
use Database\Seeders\OfferSeeder;
use Database\Seeders\RiderSeeder;
use Database\Seeders\BannerSeeder;
use Database\Seeders\TicketSeeder;
use Database\Seeders\CommandSeeder;
use Database\Seeders\PartnerSeeder;
use Database\Seeders\PricingSeeder;
use Database\Seeders\RidelogSeeder;
use Database\Seeders\VehicleSeeder;
use Database\Seeders\CampaignSeeder;
use Database\Seeders\TicketLogSeeder;
use Database\Seeders\TrekkAdminSeeder;
use Database\Seeders\CommandListSeeder;
use Database\Seeders\PartnerAdminSeeder;
use Database\Seeders\PromoFreePassSeeder;
use Database\Seeders\PromoFreeRideSeeder;
use Database\Seeders\PromoReferFriendSeeder;
use Database\Seeders\PromoFlatDiscountSeeder;
use Database\Seeders\PromoWalletCreditSeeder;
use Database\Seeders\PromoPercentageDiscountSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
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
