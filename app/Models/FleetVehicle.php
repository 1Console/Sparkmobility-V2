<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FleetVehicle extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

     /**
     * Get the user that added the fleet.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    
}
