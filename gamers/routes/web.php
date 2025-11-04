<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenereController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('games', GameController::class);

Route::resource('genres', GenereController::class);