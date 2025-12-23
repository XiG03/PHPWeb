<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $primaryKey = 'room_id';

    protected $fillable = [
        'room_type_id',
        'room_number',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    /**
     * Get the room type that owns this room.
     */
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class, 'room_type_id', 'room_type_id');
    }

    /**
     * Get the bookings for this room.
     */
    public function bookings(): HasMany
    {
        return $this->hasMany(RoomBooking::class, 'room_id', 'room_id');
    }

    /**
     * Scope a query to only include active rooms.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'Active');
    }

    /**
     * Scope a query to only include rooms in maintenance.
     */
    public function scopeMaintenance($query)
    {
        return $query->where('status', 'Maintenance');
    }
}

