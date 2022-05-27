<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\{
									LoginController,
									RegisterController
								};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| These Routes are for authentication of User
|
*/

Route::middleware(['guest'])->group(function() {
    Route::get('register',[RegisterController::class,'registerForm']);
    Route::post('register', [RegisterController::class, 'register'])->name('register');
    Route::get('login', [LoginController::class, 'loginForm']);
    Route::post('login', [LoginController::class, 'login'])->name('login');
});
Route::middleware(['auth'])->group(function() {
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});