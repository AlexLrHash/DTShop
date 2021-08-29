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
Route::get('dota/products', [\App\Http\Controllers\DotaProductController::class, 'index'])->name('dota.index');
Route::get('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'show'])->name('dota.show');
Route::post('dota/products', [\App\Http\Controllers\DotaProductController::class, 'store'])->name('dota.store');
Route::put('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'update'])->name('dota.update');
Route::delete('dota/products/{products}', [\App\Http\Controllers\DotaProductController::class, 'destroy'])->name('dota.destroy');
