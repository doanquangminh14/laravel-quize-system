<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('admin-login','admin-login');

Route::post('admin-login',[AdminController::class,'login']); 
Route::get('dashboard',[AdminController::class,'dashboard']); 
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 8f70df9ee9e6e1fdff69c1605bde41c15527ff51
