<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
            'name',
            'description',
            'status',
            'tax_option',
            'billing_unit',
            'first_unit_unlock_fee',
            'next_unit_fee',
            'tax_percentage',
            'max_billing_per_ride',
            'vehicle_reservation_price',
            'is_card_mandatory',
            'is_preauthorized_required',
    ];
}
