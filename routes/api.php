<?php

use App\Http\Controllers\UserController;
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

Route::post('/user-1',[UserController::class,'getUserOne']);
Route::post('/user-2',[UserController::class,'getUserTwo']);
Route::post('/user-3',[UserController::class,'getUserThree']);
Route::post('/user-4',[UserController::class,'getUserFour']);

