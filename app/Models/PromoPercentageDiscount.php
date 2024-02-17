<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoPercentageDiscount extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
    ];

    /**
     * Get the user that connect to promo percentage discount.
    */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
