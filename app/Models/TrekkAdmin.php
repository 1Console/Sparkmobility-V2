<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TrekkAdmin extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function user(): BelongsTo
    // {
    //     return $this->BelongsTo(User::class);
    // }

    /**
    * Get the user that connect to trekk admin.
    */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class,'userable');
    }

  
}
