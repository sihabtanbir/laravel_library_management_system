<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\userController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BookIssuesController;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware('auth')->group(function(){
// });

    //auth 
Route::get('/login',[userController::class, 'index']);
Route::post('/login',[userController::class, 'login']);

Route::get('/register',[userController::class, 'create']);
Route::post('/register',[userController::class, 'register']);

Route::get('/show_profile',[userController::class, 'show'])->name('show_user');
Route::get('/show_profile/{id}',[userController::class, 'edit'])->name('edit_user');
Route::put('/update',[userController::class, 'update'])->name('update_user');
Route::get('/UserLogout',[userController::class, 'userLogout'])->name('user_logout');

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


    Route::get('/add_student',[StudentsController::class, 'create']);
    Route::post('/add_student',[StudentsController::class, 'store']);
    Route::get('/show_student',[StudentsController::class, 'show']);


    Route::get('/books', [BookIssuesController::class, 'listBooks'])->name('book.books');

     Route::get('/books/issue', [BookIssuesController::class, 'showIssueForm'])->name('book.issue.form');
     Route::post('/books/issue', [BookIssuesController::class, 'issueBook'])->name('book.issue');
    
     Route::get('/books/return', [BookIssuesController::class, 'showReturnForm'])->name('book.return.form');
     Route::get('/books/return/{id}', [BookIssuesController::class, 'returnBook'])->name('return_book');
  


    
   

