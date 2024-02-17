<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'company_name' => 'TrekkScooters Mobility',
            'company_phone' => '08168509044',
            'domain' => 'trekkscooters.com',
            'agent_name' => 'Samson Sanders',
            'cac_document_path' => 'image.png',
            'company_email' => 'info@trekkscooters.com',
            'last_connection' => date('Y-m-d H:i:s'),

        ]);

        Partner::create([
            'company_name' => 'ABC Mobility',
            'company_phone' => '08168509055',
            'domain' => 'abcmobility.com',
            'agent_name' => 'Amina Kolestral',
            'cac_document_path' => 'image.png',
            'company_email' => 'info@abcmobility.com',
            'last_connection' => date('Y-m-d H:i:s'),
        ]);
    }
}
