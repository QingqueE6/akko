<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\LatinController;
use App\Http\Controllers\MoviesController;

Route::view('/', 'welcome')->name('home');
Route::view('archive', 'archive');
Route::view('/calories', 'calories');
// Route::view('/about', 'about');

// Wildcard routes should generally be at the bottom of the code to prevent
// collision with other routes, like /series/serie and /series/{serie}
// the {serie} could be anything so that includes /series/serie, hence collision

// Latin
Route::get('/latin', [LatinController::class, "displayAll"]);

// Movies
Route::get('/archive/movies', [MoviesController::class, "displayAllMovies"]);
Route::get('/archive/movies/{movie}', [MoviesController::class, "displaySingleMovie"]);

// Series
Route::get('/archive/series', [MoviesController::class, "displayAllSeries"]);
Route::get('/archive/series/{serie}', [MoviesController::class, "displaySingleSerie"]);

// Anime
Route::controller(AnimeController::class)->group(function () {
    Route::get('/archive/anime', "displayAll");
    Route::get('/archive/anime/create', "displayCreate");
    Route::post('/archive/anime', "createAnime");
    Route::get('/archive/anime/{anime}', "displaySingleAnime");
    Route::get('/archive/anime/{anime}/edit',  "displayEditAnime");
    Route::patch('/archive/anime/{anime}',  "editSingleAnime");
    Route::delete('/archive/anime/{anime}',  "deleteSingleAnime");
});


Route::controller(GamesController::class)->group(function (){
    Route::get('/archive/games',  "displayAll");
    Route::get('/archive/games/create',  "displayCreate");
    Route::post('/archive/games',  "createGame");
    Route::get('/archive/games/{game}',  "displaySingleGame");
    Route::get('/archive/games/{game}/edit',  "displayEditGame");
    Route::patch('/archive/games/{game}',  "editSingleGame");
    Route::delete('/archive/games/{game}',  "deleteSingleGame");
});