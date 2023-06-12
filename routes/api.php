<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
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
#registro de usuario
Route::post('register',[AuthController::class,'register']);

#autentificacion para login
Route::post('login',[AuthController::class,'login']);

#mostrar usuarios
//Route::get('users',[UserController::class,'index'])->middleware('jwt.verify');

Route::middleware('jwt.verify')->group(function(){
    Route::get('users',[UserController::class,'index']);
});




