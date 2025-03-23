<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\userController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BookIssuesController;




Route::get('/',[userController::class, 'welcome']);



    //guest 
Route::get('/login',[userController::class, 'loginForm']);
Route::post('/login',[userController::class, 'login']);

Route::get('/register',[userController::class, 'create']);


 
Route::post('/register',[userController::class, 'register']);


//auth
 Route::get('/show_profile',[userController::class, 'show'])->name('show_user');
Route::get('/show_profile/{id}',[userController::class, 'edit'])->name('edit_user');
Route::put('/update',[userController::class, 'update'])->name('update_user');
Route::get('/UserLogout',[userController::class, 'userLogout'])->name('user_logout');
Route::delete('/delete/student/{id}',[userController::class, 'deleteStudent'])->name('delete_student');
Route::get('/convert/{id}',[userController::class, 'convertAdmin'])->name('convert_admin');



Route::get('/dashboard',[userController::class, 'index']);


    Route::get('/category',[BookController::class, 'category']);
    Route::post('/category',[BookController::class, 'category_add']);
    Route::delete('/delete_category/{id}',[BookController::class, 'delete_category'])->name('delete_category');
    Route::get('/edit_category/{id}',[BookController::class, 'edit_category'])->name('edit_category');
    Route::put('/update_category',[BookController::class, 'update_category'])->name('update_category');

    Route::get('/book_author',[BookController::class, 'book_author']);
    Route::post('/book_author',[BookController::class, 'author_add']);
    Route::delete('/delete_author/{id}',[BookController::class, 'delete_author'])->name('delete_author');
    Route::get('/edit_author/{id}',[BookController::class, 'edit_author'])->name('edit_author');
    Route::put('/update_author',[BookController::class, 'update_author'])->name('update_author');

    Route::get('/add_book',[BookController::class, 'create']);
    Route::get('/search_book',[BookController::class, 'search']);
    Route::post('/add_book',[BookController::class, 'book_store']);
    Route::get('/show_book',[BookController::class, 'show_book']);
    Route::get('/show_book_student',[BookController::class, 'show_book_student']);
    Route::get('/edit_book/{id}',[BookController::class, 'edit_book'])->name('edit_book');
    Route::put('/update_book',[BookController::class, 'update_book'])->name('update_book');
    Route::delete('/delete_book/{id}',[BookController::class, 'delete_book'])->name('delete_book');



    Route::get('/student_dashboard',[StudentsController::class, 'index']);
    Route::get('/add_student',[StudentsController::class, 'create']);
    Route::post('/add_student',[StudentsController::class, 'store']);
    Route::get('/show_student',[StudentsController::class, 'show_student']);
    Route::get('/search_student',[StudentsController::class, 'search']);


    Route::get('/books', [BookIssuesController::class, 'listBooks'])->name('book.books');
    Route::get('/student/books', [BookIssuesController::class, 'showBooks'])->name('book.student');
    Route::get('/student/issue_book', [BookIssuesController::class, 'studentBooks'])->name('student.books');

     Route::get('/books/issue_book', [BookIssuesController::class, 'showIssueForm'])->name('book.issue.form');
    
     Route::post('/books/issue_book', [BookIssuesController::class, 'issueBook'])->name('book.issue');
    
     Route::get('/books/return', [BookIssuesController::class, 'showReturnForm'])->name('book.return.form');
     Route::get('/books/return/{id}', [BookIssuesController::class, 'returnBook'])->name('return_book');
  

     Route::get('/student_login',[StudentsController::class, 'index']);
     Route::post('/student_login',[StudentsController::class, 'login'])->name('student.login');
     Route::get('/student_profile',[StudentsController::class, 'show'])->name('student.profile');
     Route::get('/edit_student/{id}',[StudentsController::class, 'edit'])->name('edit.student');
     Route::put('/update_student',[StudentsController::class, 'update'])->name('update_student');
     //Route::delete('/delete_book/{id}',[StudentsController::class, 'delete_book'])->name('delete_book');
     Route::get('/logout',[StudentsController::class, 'logout']);
 

     
     


     
     

    
   

