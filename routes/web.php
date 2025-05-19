<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('test');
});

Route::get('/test', [TestController::class, 'test'])->name('test');
Route::get('/login', [TestController::class, 'login'])->name('login');
Route::get('/registro', [TestController::class, 'registro'])->name('registro');

Route::post('/registroDB', [RegisterController::class, 'registroDB'])->name('registroDB');