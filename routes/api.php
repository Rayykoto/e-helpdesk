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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('android')->group(function () {
    
    Route::post('/login', [App\Http\Controllers\Api\Android\LoginController::class, 'index'], ['as' => 'android']);

    Route::group(['middleware' => 'auth:api_user'], function() {

        Route::get('/user', [App\Http\Controllers\Api\Android\LoginController::class, 'getUser'], ['as' => 'android']);

        Route::get('/refresh', [App\Http\Controllers\Api\Android\LoginController::class, 'refreshToken'], ['as' => 'android']);

        Route::post('/logout', [App\Http\Controllers\Api\Android\LoginController::class, 'logout'], ['as' => 'android']);
    });
});


