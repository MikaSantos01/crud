<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;	
use App\Http\Controllers\PacientController;	


Route::get('/', function () {
    return view('welcome');
});


Route::resource('doctors', DoctorController::class);
Route::resource('pacients', PacientController::class);