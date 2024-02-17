<?php

namespace App\Models;

use App\Models\Ride;
use App\Models\Fleet;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = [
    ];

    /**
     * Get the fleet for this vehicles.
    */
    public function fleet(): BelongsTo
    {
        return $this->BelongsTo(Fleet::class);
    }

    /**
     * Get the all the rides for this vehicle.
    */
    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }

    /**
     * Get the all the tickers for this rider.
    */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
