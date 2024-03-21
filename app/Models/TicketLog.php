<?php

namespace App\Models;

use App\Models\User;
use App\Models\Rider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'rider_id',
        'user_id',
        'body',
        'location',
        'start_time',
        'end_time',
        'category',
        'website',
        'status',
        'image_path',
        'notes',
        'radius',
        'thumbnail_image_path',
    ];

    /**
     * Get the user that connect to ticketlog.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the rider that connect to ticketlog.
    */
    public function rider(): BelongsTo
    {
        return $this->belongsTo(Rider::class);
    }


    
}
