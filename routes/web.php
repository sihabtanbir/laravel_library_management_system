<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', function () {
    return view('welcome');
});

//auth 
Route::get('/login',[userController::class, 'index']);
Route::post('/login',[userController::class, 'login']);

Route::get('/register',[userController::class, 'create']);
Route::post('/register',[userController::class, 'register']);

Route::get('/dashboard', function () {
    return view('pages.dashboard');
});