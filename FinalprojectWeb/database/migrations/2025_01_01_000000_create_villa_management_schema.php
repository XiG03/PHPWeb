<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // 1. USERS
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('email', 255)->unique();
            $table->string('password_hash', 255);
            $table->string('full_name', 100);
            $table->string('phone_number', 20)->nullable();
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        // 2. ROOM_TYPES
        Schema::create('room_types', function (Blueprint $table) {
            $table->id('room_type_id');
            $table->string('type_name', 100);
            $table->text('description')->nullable();
            $table->decimal('base_price', 18, 2);
            $table->integer('max_occupancy');
            $table->string('thumbnail_url', 255)->nullable();
        });

        // 3. ROOMS
        Schema::create('rooms', function (Blueprint $table) {
            $table->id('room_id');
            $table->foreignId('room_type_id')
                ->constrained('room_types', 'room_type_id');
            $table->string('room_number', 20)->unique();
            $table->string('status', 20)->default('Active');
            $table->index(['room_type_id', 'status'], 'idx_rooms_type_status');
        });

        // 4. ACTIVITIES
        Schema::create('activities', function (Blueprint $table) {
            $table->id('activity_id');
            $table->string('activity_type', 20);
            $table->string('name', 150);
            $table->dateTime('start_datetime');
            $table->integer('duration_mins');
            $table->integer('capacity');
            $table->decimal('price', 18, 2);
        });

        // 5. CARTS
        Schema::create('carts', function (Blueprint $table) {
            $table->id('cart_id');
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users', 'user_id')
                ->nullOnDelete();
            $table->string('session_token', 255);
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        // 6. CART_ITEMS
        Schema::create('cart_items', function (Blueprint $table) {
            $table->id('cart_item_id');
            $table->foreignId('cart_id')
                ->constrained('carts', 'cart_id')
                ->cascadeOnDelete();
            $table->string('service_type', 20);
            $table->foreignId('room_type_id')
                ->nullable()
                ->constrained('room_types', 'room_type_id')
                ->nullOnDelete();
            $table->date('check_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->foreignId('activity_id')
                ->nullable()
                ->constrained('activities', 'activity_id')
                ->nullOnDelete();
            $table->integer('quantity')->default(1);
            $table->decimal('snapshot_price', 18, 2);
        });

        // 7. ORDERS
        Schema::create('orders', function (Blueprint $table) {
            $table->id('order_id');
            $table->foreignId('user_id')
                ->constrained('users', 'user_id');
            $table->decimal('total_amount', 18, 2);
            $table->string('order_status', 20)->default('Pending');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });

        // 8. ORDER_ITEMS
        Schema::create('order_items', function (Blueprint $table) {
            $table->id('order_item_id');
            $table->foreignId('order_id')
                ->constrained('orders', 'order_id');
            $table->string('service_type', 20);
            $table->foreignId('room_type_id')
                ->nullable()
                ->constrained('room_types', 'room_type_id')
                ->nullOnDelete();
            $table->foreignId('activity_id')
                ->nullable()
                ->constrained('activities', 'activity_id')
                ->nullOnDelete();
            $table->integer('quantity');
            $table->decimal('price_per_unit', 18, 2);
            $table->decimal('total_line_price', 18, 2);
        });

        // 9. ROOM_BOOKINGS
        Schema::create('room_bookings', function (Blueprint $table) {
            $table->id('booking_id');
            $table->foreignId('order_item_id')
                ->constrained('order_items', 'order_item_id');
            $table->foreignId('room_id')
                ->constrained('rooms', 'room_id');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->index(
                ['room_id', 'check_in_date', 'check_out_date'],
                'idx_room_bookings_dates'
            );
        });

        // 10. PAYMENTS
        Schema::create('payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('order_id')
                ->constrained('orders', 'order_id');
            $table->decimal('amount', 18, 2);
            $table->string('payment_method', 50);
            $table->string('transaction_ref', 255);
            $table->string('payment_status', 20);
            $table->dateTime('payment_date')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
        Schema::dropIfExists('room_bookings');
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('cart_items');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('activities');
        Schema::dropIfExists('rooms');
        Schema::dropIfExists('room_types');
        Schema::dropIfExists('users');
    }
};

