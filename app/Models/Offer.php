<?php

namespace App\Models;

use App\Models\Fleet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
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
        'fleet_id',
    ];

    /**
    * Get the fleet for this offer.
    */
    public function fleet(): BelongsTo
    {
        return $this->belongsTo(Fleet::class);
    }
}
