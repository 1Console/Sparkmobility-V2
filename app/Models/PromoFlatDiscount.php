<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PromoFlatDiscount extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that connect to flatdiscount.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
