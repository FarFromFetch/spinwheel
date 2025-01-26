<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/success', function () {
    return view('success');
})->name('success');
Route::post('/register', [RegisterController::class, 'register'])->name('register');