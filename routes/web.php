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

Route::get('/update/{id}',[userController::class, 'edit']);
Route::put('/update',[userController::class, 'update']);
Route::get('/logout',[userController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/category',[BookController::class, 'category']);
Route::post('/category',[BookController::class, 'category_add']);
Route::delete('/delete_category/{id}',[BookController::class, 'delete_category'])->name('delete_category');

Route::get('/book_author',[BookController::class, 'book_author']);
Route::post('/book_author',[BookController::class, 'author_add']);
Route::delete('/delete_author/{id}',[BookController::class, 'delete_author'])->name('delete_author');

Route::get('/add_book',[BookController::class, 'create']);
Route::post('/add_book',[BookController::class, 'book_store']);
Route::get('/show_book',[BookController::class, 'show_book']);
Route::get('/edit_book/{id}',[BookController::class, 'edit_book'])->name('edit_book');
Route::put('/update_book',[BookController::class, 'update_book'])->name('update_book');
Route::delete('/delete_book/{id}',[BookController::class, 'delete_book'])->name('delete_book');

