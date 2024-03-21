<?php

namespace App\Models;

use App\Models\User;
use App\Models\Rider;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
       'status',
       'title',
       'body',
       'rider_id',
       'vehicle_id',
       'user_id', //trekk admin
       'photo_path',
       'reply_message',
    ];

  /**
     * Get the user that connect to ticket.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that connect to ticket.
    */
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }

    /**
     * Get the vehicle that connect to ticket.
    */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }
}
