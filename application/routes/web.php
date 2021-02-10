<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/addTank', [App\Http\Controllers\TankController::class, 'create']);
Route::post('/tankStore', [App\Http\Controllers\TankController::class, 'store']);

