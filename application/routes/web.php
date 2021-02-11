<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'document']);

// Admin
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
// Tank
Route::get('/addTank', [App\Http\Controllers\TankController::class, 'create']);
Route::post('/tankStore', [App\Http\Controllers\TankController::class, 'store']);
// Soldier
Route::get('/addSoldier', [App\Http\Controllers\SoldierController::class, 'create']);
Route::get('/editSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'edit']);
Route::post('/updateSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'update']);
Route::post('/soldierStore', [App\Http\Controllers\SoldierController::class, 'store']);
Route::delete('/deleteSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'destroy']);
// Documents
Route::get('/addDoc', [App\Http\Controllers\documentsController::class, 'create']);
Route::post('/docStore', [App\Http\Controllers\documentsController::class, 'store']);
Route::get('/editdoc/{id}', [App\Http\Controllers\documentsController::class, 'edit']);
Route::post('/updatedoc/{id}', [App\Http\Controllers\documentsController::class, 'update']);
Route::delete('/deletedoc/{id}', [App\Http\Controllers\documentsController::class, 'destroy']);


