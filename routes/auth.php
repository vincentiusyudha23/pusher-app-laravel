<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Auth::routes();

Route::middleware('guest')->group(function(){
    Route::get('/', [LoginController::class, 'showLoginForm' ])->name('login');
    Route::post('/', [LoginController::class, 'login' ]);
});