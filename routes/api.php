<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/Categories', [App\Http\Controllers\CategorieController::class,"index"]);


Route::post('/register', [App\Http\Controllers\UserBuyerSellerController::class,"register"]);
Route::get('/user', [App\Http\Controllers\UserBuyerSellerController::class,"getUser"]);
Route::post('/login', [App\Http\Controllers\UserBuyerSellerController::class,"login"]);
Route::post('/loginGoogle', [App\Http\Controllers\UserBuyerSellerController::class,"loginGoogle"]);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [App\Http\Controllers\UserBuyerSellerController::class,"index"]);
    Route::post('/logout', [App\Http\Controllers\UserBuyerSellerController::class,"logout"]);
});


