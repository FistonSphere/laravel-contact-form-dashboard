<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\SendMessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register-save', [AuthController::class, 'register'])->name('register.post');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::post('logout', function () {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout successful');
    })->name('logout');

    Route::post('/send-message', [SendMessageController::class, 'send'])->name('send.message');

    // Route::group(['middleware' => 'IsAdmin'], function () {
    Route::get('/show-messages', [SendMessageController::class, 'showMessages'])->name('showMessages');
    // });
});
