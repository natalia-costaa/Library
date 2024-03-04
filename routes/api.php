<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExemplaryController;
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

/* Route::prefix('/users')->group(function() {
    //Route::get('/', [UserController::class,'index']);
    Route::get('/{id}', [UserController::class,'show']);
    Route::post('/', [UserController::class,'store']);
    Route::put('/{id}', [UserController::class,'update']);
    Route::delete('/{id}', [UserController::class,'destroy']);
});
*/




Route::resource('users', UserController::class);
/*Route::resource('exemplaries', ExemplaryController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */
