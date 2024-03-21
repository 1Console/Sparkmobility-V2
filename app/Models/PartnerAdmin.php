<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PartnerAdmin extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
    * Get the user that connect to trekk admin.
    */
    public function user(): MorphOne
    {
        return $this->MorphOne(User::class,'userable');
    }

}
