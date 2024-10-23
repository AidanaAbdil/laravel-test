<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/awards', [AwardController::class, 'index']);
Route::get('/movies', [MovieController::class,'topRated']);