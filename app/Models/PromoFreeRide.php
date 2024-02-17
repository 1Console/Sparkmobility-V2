<?php

namespace App\Models;

use App\Models\User;
use App\Models\Fleet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromoFreeRide extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'query_string',
        'fleet_id',
        'max_used',
        'max_single_used',
        'daily_used',
        'show_on_map',
        'promo_code',
        'usage_validity',
    ];

    /**
    * Get the user that connect to freeride.
    */
    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }
}
