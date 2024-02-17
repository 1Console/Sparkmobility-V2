<?php

namespace App\Models;


use App\Models\Fleet;
use App\Models\Rider;
use App\Models\Ridelog;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ride extends Model
{
    use HasFactory;

    protected $guarded = [];

     /**
     * Get the rider that connect to ride.
    */
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }

     /**
     * Get the vehicle that connect to ride.
    */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }


    /**
     * Get the fleet that connect to ride.
    */
    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }

    /**
     * Get the all the ridelogs for this ride.
    */
    public function ride_logs(): HasMany
    {
        return $this->hasMany(Ridelog::class);
    }
}
