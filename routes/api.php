<?php

use App\Http\Controllers\UserAuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::group(['middleware' => 'api'], function ($router) {
    Route::post('register', [UserAuthController::class, 'register']);
    Route::post('login', [UserAuthController::class, 'login']);
    Route::get('user', [UserAuthController::class, 'user']);
    Route::post('refresh', [UserAuthController::class, 'refresh']);
    Route::post('logout', [UserAuthController::class, 'logout']);

    Route::get('email-verify/{remember_token}', [UserAuthController::class, 'registerVerify']);

});