<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentsController;

   // Route::middleware('student')->
   
      Route::get('/student_login',[StudentsController::class, 'index']);
      Route::post('/student_login',[StudentsController::class, 'login'])->name('student.login');
      Route::get('/student_profile',[StudentsController::class, 'show_student'])->name('student.profile');
      Route::get('/edit_student/{id}',[StudentsController::class, 'edit'])->name('edit.student')->middleware('student');
      //Route::put('/update_book',[StudentsController::class, 'update_book'])->name('update_book');
      //Route::delete('/delete_book/{id}',[StudentsController::class, 'delete_book'])->name('delete_book');
      Route::get('/logout',[StudentsController::class, 'logoutStudent']);
  
  
      Route::get('/student_dashboard', function () {
          return view('student.dashboard');
      });
  

