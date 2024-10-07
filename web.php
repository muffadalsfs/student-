<?php


//  use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\usercontroller;




// Route::controller(StudentController::class)->group(function () {
//     Route::get('mail', 'mail');    // maps to StudentController::mail
//     Route::get('mails', 'mails');  // maps to StudentController::mails
//     Route::post('blog','blog');
// });
// Route::view('/student/html', 'dummy')->name('web');
Route::post('list',[usercontroller::class,'login']);
route::view('login','login');
Route::view('blogfrom', 'blogfrom');
Route::view('home', 'home');
Route::post('blog',[StudentController::class,'blog']);
Route::get('list',[StudentController::class,'list']);

Route::delete('delete/{id}', [StudentController::class, 'destroy']);
Route::get('edit/{id}', [StudentController::class, 'edit']);
Route::post('update/{id}', [StudentController::class, 'update']);
Route::get('/details/{id}', [StudentController::class, 'show'])->name('blog.details');
  

