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

Route::get('/user/cards', [\App\Http\Controllers\CardController::class, 'index'])->name('user.cards.index');
Route::post('/user/cards', [\App\Http\Controllers\CardController::class , 'store'])->name('user.cards.store');
Route::get('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'show'])->name('user.cards.show');
Route::put('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'update'])->name('user.cards.update');
Route::delete('/user/cards/{id}', [\App\Http\Controllers\CardController::class, 'destroy'])->name('user.cards.destroy');


