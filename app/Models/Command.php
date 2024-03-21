<?php

namespace App\Models;

use App\Models\CommandList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Command extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'command_id',
        'type', //1 - vehicle or 2 - fleet
        'associated_ids',
    ];
    
    /**
     * Get the commandlist for this command.
    */
    public function command_list(): BelongsTo
    {
        return $this->belongsTo(CommandList::class);
    }
}

