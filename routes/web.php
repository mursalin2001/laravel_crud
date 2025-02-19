<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/users', [UsersController::class, 'index']);

Route::get('/home', [UsersController::class, 'home']);

Route::post('/store', [UsersController::class, 'ourFileStore'])->name('store');
Route::get('/edit/{id}', [UsersController::class, 'editData'])->name('edit');
Route::post('/update/{id}', [UsersController::class, 'updateData'])->name('update');
Route::get('/delete/{id}', [UsersController::class, 'deleteData'])->name('delete');

