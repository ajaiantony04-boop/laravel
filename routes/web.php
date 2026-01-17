<?php
use App\Http\Controllers\CheckLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');


});



Route::post('/checklogin', [CheckLoginController::class, 'checkLogin']);