<?php

namespace App\Models;

use App\Models\Command;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CommandList extends Model
{
    use HasFactory;

    protected $fillable = [
      'name'
    ];  

    /**
     * Get the all the commands for this commandlist.
    */
    public function commands(): HasMany
    {
        return $this->hasMany(Command::class);
    }
}
