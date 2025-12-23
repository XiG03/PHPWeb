<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OrderItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'order_item_id';

    protected $fillable = [
        'order_id',
        'service_type',
        'room_type_id',
        'activity_id',
        'quantity',
        'price_per_unit',
        'total_line_price',
    ];

    protected $casts = [
        'quantity' => 'integer',
        'price_per_unit' => 'decimal:2',
        'total_line_price' => 'decimal:2',
    ];

    /**
     * Get the order that owns this order item.
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }

    /**
     * Get the room type for this order item.
     */
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'room_type_id');
    }

    /**
     * Get the activity for this order item.
     */
    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class, 'activity_id', 'activity_id');
    }

    /**
     * Get the bookings for this order item.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(RoomBooking::class, 'order_item_id', 'order_item_id');
    }
}

