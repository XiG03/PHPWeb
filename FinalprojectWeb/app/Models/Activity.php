<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'activity_id';

    protected $fillable = [
        'activity_type',
        'name',
        'start_datetime',
        'duration_mins',
        'capacity',
        'price',
    ];

    protected $casts = [
        'start_datetime' => 'datetime',
        'duration_mins' => 'integer',
        'capacity' => 'integer',
        'price' => 'decimal:2',
    ];

    /**
     * Get the cart items for this activity.
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class, 'activity_id', 'activity_id');
    }

    /**
     * Get the order items for this activity.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'activity_id', 'activity_id');
    }

    /**
     * Scope a query to only include events.
     */
    public function scopeEvents($query)
    {
        return $query->where('activity_type', 'Event');
    }

    /**
     * Scope a query to only include tours.
     */
    public function scopeTours($query)
    {
        return $query->where('activity_type', 'Tour');
    }
}

