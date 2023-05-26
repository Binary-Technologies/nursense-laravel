<?php

use App\Http\Controllers\HomeController;
use Dotenv\Exception\ValidationException;
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

//admin panel: user registration, update, delete, and show routes here
Route::get('/User-details',[HomeController::class,'showUser']);
Route::post('/Register-user',[HomeController::class,'userRegister']);
Route::put('/users/update/{id}',[HomeController::class,'update']);
Route::delete('/users/{id}',[HomeController::class,'destroy']);


