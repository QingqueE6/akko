<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LatinController;
use App\Http\Controllers\MoviesController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/archive', function () {
    return view('archive');
});

Route::get('/calories', function () {
    return view('calories');
});

Route::get('/latin', [LatinController::class, "display"]);
Route::get('/archive/movies', [MoviesController::class, "displayMovies"]);
Route::get('/archive/series', [MoviesController::class, "displaySeries"]);
Route::get('/archive/anime', [AnimeController::class, "display"]);
Route::get('/archive/games', [GamesController::class, "display"]);


// Route::get('/about', function () {
//     return view('about');
// });