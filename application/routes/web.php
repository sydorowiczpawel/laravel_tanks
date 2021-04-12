<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home/', [App\Http\Controllers\documentsController::class, 'index']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'document']);

// Admin
Route::get('/admin', [App\Http\Controllers\userController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\documentsController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\TankController::class, 'index']);
// Tank
Route::get('/tankslst/{pass_number}', [App\Http\Controllers\TankController::class, 'index']);
Route::get('/addTank', [App\Http\Controllers\TankController::class, 'create']);
Route::get('/editSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'edit']);
Route::post('/updateSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'update']);
Route::post('/tankStore/{pass_number}', [App\Http\Controllers\TankController::class, 'store']);
Route::delete('/deleteSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'destroy']);
// Soldier
Route::get('/personalFile/{pass_number}', [App\Http\Controllers\SoldierController::class, 'index']);
Route::get('/addSoldier', [App\Http\Controllers\SoldierController::class, 'create']);
Route::get('/editSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'edit']);
Route::post('/updateSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'update']);
Route::post('/soldierStore', [App\Http\Controllers\SoldierController::class, 'store']);
Route::delete('/deleteSoldier/{id}', [App\Http\Controllers\SoldierController::class, 'destroy']);
// Documents
Route::get('userDocs/{pass_number}', [App\Http\Controllers\documentsController::class, 'show']);
Route::get('/doclst', [App\Http\Controllers\documentsController::class, 'index']);
Route::get('/adddoc/{pass_number}', [App\Http\Controllers\documentsController::class, 'create']);
Route::post('/docstore/{pass_number}', [App\Http\Controllers\documentsController::class, 'store']);
Route::get('/editdoc/{id}', [App\Http\Controllers\documentsController::class, 'edit']);
Route::post('/updatedoc/{id}', [App\Http\Controllers\documentsController::class, 'update']);
Route::get('/deletedoc/{id}', [App\Http\Controllers\documentsController::class, 'destroy']);
// Exit orders
Route::get('/allextorders/{pass_number}', [App\Http\Controllers\exitOrderController::class, 'index']);
Route::get('/selTankOrders/{tank_number}', [App\Http\Controllers\exitOrderController::class, 'showSelected']);
Route::get('/addexitorder', [App\Http\Controllers\exitOrderController::class, 'create']);
Route::post('/exitorderstore/{pass_number}', [App\Http\Controllers\exitOrderController::class, 'neworder']);
Route::get('/editexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'edit']);
Route::post('/finishexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'finish']);
Route::get('/eodetails/{id}', [App\Http\Controllers\exitOrderController::class, 'show']);
// Route::get('/deleteexitorder/{id}', [App\Http\Controllers\exitOrderController::class, 'destroy']);
// User
