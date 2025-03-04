<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

//auth 
Route::get('/login',[userController::class, 'index']);
Route::post('/login',[userController::class, 'login']);

Route::get('/register',[userController::class, 'create']);
Route::post('/register',[userController::class, 'register']);

Route::get('/update',[userController::class, 'edit']);
Route::post('/update',[userController::class, 'update']);
Route::get('/logout',[userController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/category',[BookController::class, 'category']);
Route::post('/category',[BookController::class, 'category_add']);
Route::delete('/delete_category/{id}',[BookController::class, 'delete_category'])->name('delete_category');

