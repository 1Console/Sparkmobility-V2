<?php

namespace App\Models;

use App\Models\Rider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rider_id',
        'send_notifications',
        'to',
        'message', // it has a lot
    ];


    /**
     * Get the rider that owns the campaign.
    */
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }
}
