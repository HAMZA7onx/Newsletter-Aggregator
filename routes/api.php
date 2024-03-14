<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnRssController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// START HAMZA


// END HAMZA


// START NAWFAL

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // ----------------------------login ------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::post('login/push', 'authenticate')->name('login/push');
    });

    // ------------------------ register sccount ----------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::post('register/save', 'saveRecord')->name('register/save');
    });
}); 


// END NAWFAL


// START IMAD



Route::prefix('api')->group(function () {
    Route::prefix('ownrss')->group(function () {
        Route::get('/', [OwnRssController::class, 'index']);
        // Other routes for OwnRssController
    });
});

Route::get('/Ownrss', [OwnRssController::class, 'index']); // http://127.0.0.1:8000/api/Ownrss

// END IMAD
