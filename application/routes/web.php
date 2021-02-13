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
Route::get('/doclst', [App\Http\Controllers\documentsController::class, 'index']);
Route::get('/adddoc', [App\Http\Controllers\documentsController::class, 'create']);
Route::post('/docstore', [App\Http\Controllers\documentsController::class, 'store']);
Route::get('/editdoc/{id}', [App\Http\Controllers\documentsController::class, 'edit']);
Route::post('/updatedoc/{id}', [App\Http\Controllers\documentsController::class, 'update']);
Route::get('/deletedoc/{id}', [App\Http\Controllers\documentsController::class, 'destroy']);
// Exit orders
Route::get('/exitorderslst', [App\Http\Controllers\exitOrderController::class, 'index']);
Route::get('/addexitorder', [App\Http\Controllers\exitOrderController::class, 'create']);
Route::post('/exitorderstore', [App\Http\Controllers\exitOrderController::class, 'store']);
Route::get('/editexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'edit']);
Route::post('/updateexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'update']);
Route::get('/deleteexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'destroy']);