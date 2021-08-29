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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

=======
Route::get('/basket/{basket}',[\App\Http\Controllers\BasketController::class, 'show'])->name('basket.show');
Route::post('/basket/{basket}',[\App\Http\Controllers\BasketController::class, 'add'])->name('basket.add');
Route::delete('/basket/{basket_id}',[\App\Http\Controllers\BasketController::class, 'destroy'])->name('basket.destroy');
Route::get('/basket',[\App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');


Route::get('dota/products', [\App\Http\Controllers\DotaProductController::class, 'index'])->name('dota.index');
Route::get('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'show'])->name('dota.show');
Route::post('dota/products', [\App\Http\Controllers\DotaProductController::class, 'store'])->name('dota.store');
Route::put('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'update'])->name('dota.update');
Route::delete('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'destroy'])->name('dota.destroy');
