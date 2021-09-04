<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// User Cards
Route::get('/user/cards', [\App\Http\Controllers\CardController::class, 'index'])->name('user.cards.index');
Route::post('/user/cards', [\App\Http\Controllers\CardController::class , 'store'])->name('user.cards.store');
Route::get('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'show'])->name('user.cards.show');
Route::put('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'update'])->name('user.cards.update');
Route::delete('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'destroy'])->name('user.cards.destroy');

// Basket
Route::get('/basket/{basket}',[\App\Http\Controllers\BasketController::class, 'show'])->name('basket.show');
Route::post('/basket/{basket}',[\App\Http\Controllers\BasketController::class, 'add'])->name('basket.add');
Route::delete('/basket/{basket_id}',[\App\Http\Controllers\BasketController::class, 'destroy'])->name('basket.destroy');
Route::get('/basket',[\App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');

// Dota Products
Route::get('/dota/products', [\App\Http\Controllers\DotaProductController::class, 'index'])->name('dota.index');
Route::get('/dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'show'])->name('dota.show');
Route::post('/dota/products', [\App\Http\Controllers\DotaProductController::class, 'store'])->name('dota.store');
Route::put('/dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'update'])->name('dota.update');
Route::delete('/dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'destroy'])->name('dota.destroy');

// Auth
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');

Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('/user', [\App\Http\Controllers\AuthController::class, 'user'])->name('auth.user');
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
});
