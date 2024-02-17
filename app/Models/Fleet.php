<?php

namespace App\Models;

use App\Models\Ride;
use App\Models\User;
use App\Models\Offer;
use App\Models\Rider;
use App\Models\Vehicle;
use App\Models\PromoFreeRide;
use App\Models\PromoReferFriend;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Fleet extends Model
{
    use HasFactory;

    protected $guarded = [];



    /**
     * Get the user that added the fleet.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    /**
     * Get the all the vehicles for this fleet.
    */
    public function vehicles(): HasMany
    {
        return $this->HasMany(Vehicle::class);
    }

    /**
    * Get the all the rides for this fleet.
    */
    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }

    /**
    * Get the all the rides for this fleet.
    */
    public function offers(): HasMany
    {
        return $this->hasMany(Offer::class);
    }

     /**
    * Get the all the promofreerides for this fleet.
    */
    public function promo_free_rides(): HasMany
    {
        return $this->hasMany(PromoFreeRide::class);
    }

     /**
    * Get the all the promofreerides for this fleet.
    */
    public function promo_refer_friends(): HasMany
    {
        return $this->hasMany(PromoReferFriend::class);
    }
}
