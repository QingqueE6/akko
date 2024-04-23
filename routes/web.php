<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\LatinController;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/games', function () {
    return view('games');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/latin', [LatinController::class, "display"]);
Route::get('/movies', [MoviesController::class, "display"]);
Route::get('/anime', [AnimeController::class, "display"]);
