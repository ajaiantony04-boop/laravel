<?php

use App\Http\Controllers\CheckLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Login page
Route::get('/', function () {
    return view('login');
})->name('login');

// Handle login form
Route::post('/checklogin', [CheckLoginController::class, 'checkLogin'])->name('checklogin');

// Protected route: Only logged-in admins
Route::middleware(['auth', 'Checkrole'])->group(function () {
    Route::get('/home', [HomeController::class, 'indexpage'])->name('home');
    Route::resource('students', StudentController::class);
    Route::get('/students/{student}/edit', [StudentController::class, 'edit'])
     ->name('students.edit');
    Route::get('/students.create',[StudentController::class,'create'])->name('students.create');
     //Route::get('/edit/{coursePlan}',[CoursePlanController::class,'edit'])->name('course-plan.edit');
    Route::post('/student.add-student',[StudentController::class,'add'])->name('student.add-student');
     });
