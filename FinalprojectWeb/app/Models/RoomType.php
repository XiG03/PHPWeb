<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoomType extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'room_type_id';

    protected $fillable = [
        'type_name',
        'description',
        'base_price',
        'max_occupancy',
        'thumbnail_url',
    ];

    protected $casts = [
        'base_price' => 'decimal:2',
        'max_occupancy' => 'integer',
    ];

    /**
     * Get the rooms for this room type.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'room_type_id', 'room_type_id');
    }

    /**
     * Get the cart items for this room type.
     */
    public function cartItems(): HasMany
    {
        return $this->hasMany(CartItem::class, 'room_type_id', 'room_type_id');
    }

    /**
     * Get the order items for this room type.
     */
    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItem::class, 'room_type_id', 'room_type_id');
    }
}

