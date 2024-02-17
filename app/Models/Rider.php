<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Ride;
use App\Models\User;
use App\Models\Ticket;
use App\Models\Campaign;
use App\Models\TicketLog;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Rider extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getCreatedAtAttribute($value){
        return Carbon::parse($value)->format('Y-m-d H:i:s');
    }

    /**
    * Get the user that connect to rider.
    */
    public function user(): MorphOne
    {
        return $this->morphOne(User::class,'userable');
    }

    /**
     * Get the all the campaigns for this rider.
    */
    public function campaigns(): HasMany
    {
        return $this->hasMany(Campaign::class);
    }

     /**
     * Get the all the rides for this rider.
    */
    public function rides(): HasMany
    {
        return $this->hasMany(Ride::class);
    }

    /**
     * Get the all the tickers for this rider.
    */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Get the all the ticketlogs for this rider.
    */
    public function ticket_logs(): HasMany
    {
        return $this->hasMany(TicketLog::class);
    }

  

}
