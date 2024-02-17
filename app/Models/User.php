<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Fleet;
use App\Models\Rider;
use App\Models\Ticket;
use App\Models\TicketLog;
use App\Models\TrekkAdmin;
use App\Models\PromoFreePass;
use App\Models\PromoFlatDiscount;
use App\Models\PromoWalletCredit;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use App\Models\PromoPercentageDiscount;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use  HasApiTokens, HasRoles, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable. changed
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     /**
     * Get the parent imageable model (user or post).
     */
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }

   
    
    /**
     * Get the partner for this user.
    */
    public function partner(): BelongsTo
    {
        return $this->belongsTo(Partner::class);
    }

    /**
     * Get the all the fleets for this user.
    */
    public function fleets(): HasMany
    {
        return $this->hasMany(Fleet::class);
    }

    /**
     * Get the all the riders added by this user.
    */
    public function riders(): HasMany
    {
        return $this->hasMany(Rider::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function ticket_logs(): HasMany
    {
        return $this->hasMany(TicketLog::class);
    }
 
    public function promo_free_passes(): HasMany
    {
        return $this->hasMany(PromoFreePass::class);
    }

    public function promo_flat_discounts(): HasMany
    {
        return $this->hasMany(PromoFlatDiscount::class);
    }

    public function promo_percentage_discounts(): HasMany
    {
        return $this->hasMany(PromoPercentageDiscount::class);
    }

    public function promo_wallet_credits(): HasMany
    {
        return $this->hasMany(PromoWalletCredit::class);
    }

    public function trekk_admins(): HasMany
    {
        return $this->hasMany(TrekkAdmin::class);
    }
    
}
