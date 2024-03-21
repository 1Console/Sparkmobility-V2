<?php

namespace App\Models;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromoReferFriend extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_in_app_description',
        'receiver_message_description',
        'status',
        'receiver_promo_type',
        'sender_promo_type',
        'receiver_amount',
        'sender_amount',
        'fleet_id',
    ];

    /**
    * Get the user that connect to freeride.
    */
    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }
}
