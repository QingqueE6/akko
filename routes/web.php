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
Route::get('/archive/anime', [AnimeController::class, "displayAll"]);
Route::get('/archive/anime/create', [AnimeController::class, "displayCreate"]);
Route::post('/archive/anime', [AnimeController::class, "createAnime"] );
Route::get('/archive/anime/{anime}', [AnimeController::class, "displaySingleAnime"]);

// Games
Route::get('/archive/games', [GamesController::class, "displayAll"]);
Route::get('/archive/games/create', [GamesController::class, "displayCreate"]);
Route::post('/archive/games', [GamesController::class, "createGame"] );
Route::get('/archive/games/{game}', [GamesController::class, "displaySingleGame"]);

Route::get('/archive/games/{game}/edit', [GamesController::class, "displayEditGame"]);
Route::patch('/archive/games/{game}', [GamesController::class, "editSingleGame"]);
Route::delete('/archive/games/{game}', [GamesController::class, "deleteSingleGame"]);

// Route::get('/about', function () {
//     return view('about');
// });