<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'home']);

Route::get('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'create_user']);
Route::get('register', [AuthController::class, 'register']);
// Route::get('login', [AuthController::class, 'login']);
