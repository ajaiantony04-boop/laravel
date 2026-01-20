<?php
use App\Http\Controllers\CheckLoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');


});



Route::post('/checklogin', [CheckLoginController::class, 'checkLogin']);
Route::get('/home',[Homecontroller::class,'indexpage'])->name('home');