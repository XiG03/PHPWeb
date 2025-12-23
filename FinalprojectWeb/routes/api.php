<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoomPublicController;
use App\Http\Controllers\Api\ActivityController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\PaymentController;
use App\Http\Controllers\Api\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// --- PUBLIC (Không cần login) ---
Route::get('/rooms', [RoomPublicController::class, 'index']); // Tìm kiếm
Route::get('/rooms/{id}', [RoomPublicController::class, 'show']); // Chi tiết
Route::get('/activities', [ActivityController::class, 'index']);
Route::get('/activities/{id}', [ActivityController::class, 'show']);

// --- CART (Guest & User) ---
Route::get('/cart', [CartController::class, 'index']);
Route::post('/cart/add', [CartController::class, 'store']);
Route::delete('/cart/{id}', [CartController::class, 'destroy']);

// --- BOOKING & PAYMENT ---
Route::post('/booking/checkout', [BookingController::class, 'checkout']);
Route::get('/payment/vnpay-callback', [PaymentController::class, 'handleVnpayCallback']);
Route::get('/payment/mock-callback', [PaymentController::class, 'mockCallback'])->name('api.payment.callback.mock');

// --- PRIVATE (Cần đăng nhập) ---
Route::middleware('auth:sanctum')->group(function () {
    // User
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/my-orders', [UserController::class, 'history']);
    Route::put('/profile', [UserController::class, 'updateProfile']);

    // Admin (Nên thêm middleware check role admin ở đây)
});
