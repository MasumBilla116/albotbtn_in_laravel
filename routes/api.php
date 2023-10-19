<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoContentController;

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
// ajax method in custom.min.js
Route::post('/video/disabled/',[VideoContentController::class,'disabledVideo']);
Route::post('/video/active/',[VideoContentController::class,'activeVideo']);
Route::post('/video/delete/',[VideoContentController::class,'deleteVideo']); 