<?php

namespace App\Models;

use App\Models\Ride;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ridelog extends Model
{
    use HasFactory;

    protected $fillable = [
            'time',
            'amount',
            'pause_duration',
            'ride_id',
    ];

    /**
     * Get the ride that connect to ridelog.
    */
    public function ride(): BelongsTo
    {
        return $this->belongsTo(Ride::class);
    }
}
